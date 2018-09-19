var mapStyleString5 = '[{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]';
//Init the map, centered at Melb CBD: -37.814, 144.96332
var map = null;

// Initialize and add the map
function initMap() {
    var carparks = JSON.parse(document.getElementById('content').dataset.carparks);

    //Init the map, centered at Melb CBD: -37.814, 144.96332
    map = new google.maps.Map(
        document.getElementById('map'),
        {
            zoom: 15,
            center: {lat: -37.814, lng: 144.96332},
            styles: JSON.parse(mapStyleString5)
        });

    //Init car markers
    var markers = carparks.map(function(carpark, i) {
        return new google.maps.Marker({
            position: {lat: carpark.lat, lng: carpark.long},
            map: map,
            animation: google.maps.Animation.DROP,
            carParkData: carpark,
            title: carpark.address
        });
    });
    for (let marker of markers) {
        let contentString = '<div id="content">'+
            // '<div id="siteNotice">'+
            // '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+marker.carParkData.name+'</h5>'+
            '<div id="bodyContent">'+
            '<h3 >'+marker.carParkData.address+'</h3>'+
            '</div>'+
            '<button onclick="returnCar('+marker.carParkData.id+')">Return</button>'
        '</div>';

        let infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
}
function recenterMap(lat,long) {
    var center = new google.maps.LatLng(lat,long);
    map.panTo(center);
}