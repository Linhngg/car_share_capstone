//
// //First implimentation of user location function
// //Curtis Maunder
// window.onload = function() {
//     // Check to see if the browser supports the GeoLocation API.
//     if (navigator.geolocation) {
//         // Get the location
//         navigator.geolocation.getCurrentPosition(function(position) {
//
//             //Store and show users location
//             //Google maps uses latitude and longitude
//             var lat = position.coords.latitude;
//             var lon = position.coords.longitude;
//
//             showMap(lat, lon);
//         });
//     } else {
//         //Inform the user they cannot use the "find me" feature
//         document.getElementById('error').innerHTML = "Sorry. You are unable to use GeoLocation";
//     }
// }
// // Show the user's position on a Google map.
// function showMap(lat, lon) {
//     var userLocation = new google.maps.LatLng(lat, lon);
//
//     // Map Options
//     var mapOptions = {
//         zoom: 8,
//         center: userLocation,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     };
//
//     // Generate the map and add the marker
//     var map = new google.maps.Map(document.getElementById('map'), mapOptions);
//
//     var marker = new google.maps.Marker({
//         position: userLocation,
//         map: map,
//         title: 'User Location'
//     });
// }
// function toggleResultBox() {
//     var rBox = document.getElementById("resultBox");
//     if (rBox.style.display === "none") {
//         rBox.style.display = "block";
//     } else {
//         rBox.style.display = "none";
//     }
// }
var mapStyleString5 = '[{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]';

var map = null
var carpark = null
var directionsService = null
var directionsDisplay = null
var userLatLng = null

function loadCarpark(){
    carpark = JSON.parse(document.getElementById('map').dataset.carpark)
}

// Initialize and add the map
function initMap() {
    loadCarpark()

    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer;

    //Init the map, centered at Melb CBD: -37.814, 144.96332
    map = new google.maps.Map(
        document.getElementById('map'),
        {
            zoom: 15,
            center: {lat: -37.814, lng: 144.96332},
            styles: JSON.parse(mapStyleString5)
        });
    directionsDisplay.setMap(map);

    initCarParkMarker()
    initUserMarker()
}

function initCarParkMarker () {
    //Init car markers

    var carParkMarker = new google.maps.Marker({
        position: {lat: carpark.lat, lng: carpark.long},
        map: map,
        animation: google.maps.Animation.BOUNCE,
        title: carpark.name+" - "+carpark.address,
    });

    setTimeout(function (){
        carParkMarker.setAnimation(google.maps.Animation.NONE);
    }, 5000);
}

function initUserMarker () {
    //Init User Marker
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            userLatLng = pos
            var image = 'images/icons/you-are-here-2.png';
            var userMarker = new google.maps.Marker({
                position: pos,
                map: map,
                animation: google.maps.Animation.BOUNCE,
                icon: image
            });
            setTimeout(function (){
                userMarker.setAnimation(google.maps.Animation.NONE);
            }, 5000);
            calculateAndDisplayRoute()
        }, function() {
            console.log('Cant find user location')
        });
    }
}

function calculateAndDisplayRoute() {
    directionsService.route({
        origin: {lat: userLatLng.lat, lng: userLatLng.lng},
        destination: {lat: carpark.lat, lng: carpark.long},
        travelMode: 'WALKING'
    }, function(response, status) {
        if (status === 'OK') {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}