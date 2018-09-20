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

var mapStyleString1 = '[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#7c93a3"},{"lightness":"-10"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#7c93a3"},{"lightness":"-10"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#a0a4a5"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"color":"#62838e"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#f5f5f5"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#3f4a51"},{"weight":"0.30"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"},{"saturation":"-100"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#e5e5e5"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#bbcacf"},{"weight":"0.50"},{"lightness":"0"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#a9b4b8"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"invert_lightness":true},{"weight":"0.01"},{"saturation":"-7"},{"lightness":"3"},{"gamma":"1.80"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#a3c7df"}]}]';
var mapStyleString2 = '[{"elementType":"geometry","stylers":[{"color":"#ebe3cd"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#523735"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f1e6"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#c9b2a6"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"color":"#dcd2be"}]},{"featureType":"administrative.land_parcel","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#ae9e90"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#93817c"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#a5b076"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#447530"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#f5f1e6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fdfcf8"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#f8c967"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#e9bc62"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#e98d58"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#db8555"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#806b63"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"color":"#8f7d77"}]},{"featureType":"transit.line","elementType":"labels.text.stroke","stylers":[{"color":"#ebe3cd"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#b9d3c2"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#92998d"}]}]';
var mapStyleString3 = '[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]';
var mapStyleString4 = '[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]}]';
var mapStyleString5 = '[{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]';
var mapStyleString6 = '[{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]'

var carMarkers = []
var clusterInfoWindows = []
var markerCluster = null
var map = null
var allCars = null
var carFeatures = [
    {
        type: 'child-seat',
        display: 'Child seat'
    },
    {
        type: 'gps',
        display: 'GPS system'
    },
    {
        type: 'bike-rack',
        display: 'Bike rack'
    },
    {
        type: 'wheelchair',
        display: 'Wheelchair accessible'
    },
    {
        type: 'cruise-control',
        display: 'Cruise control'
    },
    {
        type: 'roof-rack',
        display: 'Roof rack'
    },
]

function loadCars(){
    allCars = JSON.parse(document.getElementById('content').dataset.cars);
    for (let car of allCars) {
        car.features = JSON.parse(car.features)
        car.features = Object.keys(car.features).map(function(key) {
            return car.features[key];
        });
    }
}

function filterCars() {
    var selectedType = document.getElementById('carType').value
    var selectedSeats = document.getElementById('numberOfSeat').value
    var eles = document.getElementsByName('carFeatures')
    var selectedFeatures = []
    for (let ele of eles) {
        if (ele.checked) {
            selectedFeatures.push(ele.value)
        }
    }
    //FILTER CAR TYPE
    var filteredCar = allCars.filter(car => {
        if (selectedType !== 'default' && car.brand !== selectedType) return false;
        return true;
    })
    //FILTER CAR SEATS
    filteredCar = filteredCar.filter(car => {
        if (selectedSeats !== 'default' && Number(selectedSeats) !== car.seats) return false;
        return true;
    })
    //FILTER CAR FEATURES
    filteredCar = filteredCar.filter(car => {
        var satisfied = true;
        for (let feature of selectedFeatures) {
            if (car.features.indexOf(feature) === -1) {
                satisfied = false;
                break;
            }
        }
        return satisfied;
    })
    console.log(selectedFeatures)
    console.log(filteredCar)
    refreshMap(filteredCar)
}

function refreshMap (filteredCar) {
    markerCluster.clearMarkers()
    initCarMarker(filteredCar)
}

// Initialize and add the map
function initMap() {
    loadCars()

    //Init the map, centered at Melb CBD: -37.814, 144.96332
    map = new google.maps.Map(
        document.getElementById('map'),
        {
            zoom: 15,
            center: {lat: -37.814, lng: 144.96332},
            styles: JSON.parse(mapStyleString5)
        });
    initCarMarker(allCars)
    initUserMarker()
}

function initCarMarker (cars) {
    //Init car markers
    carMarkers = cars.map(function(car, i) {
        return new google.maps.Marker({
            id: car.id,
            position: {lat: car.lat, lng: car.long},
            map: map,
            animation: google.maps.Animation.DROP,
            carData: car,
            title: car.model
        });
    });
    markerCluster = new MarkerClusterer(map, carMarkers,
        {
            imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
            zoomOnClick: false
        });

    google.maps.event.addListener(markerCluster, 'clusterclick', function(cluster) {
        openClusterMarker(cluster)
    });

    for (let marker of carMarkers) {
        let contentString = '<div id="content">'+
            // '<div id="siteNotice">'+
            // '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+marker.carData.model+'</h5>'+
            '<div id="bodyContent">'+
            '<h3 >'+marker.carData.model+'</h3>'+
            '<p class="h4 text-muted">$200.00/Day</p>'+
            '</div>'+
            '<button onclick="goBookPage('+marker.carData.id+')">Book now</button>'
        '</div>';

        marker.infoWindow = new google.maps.InfoWindow({
            id: marker.id,
            content: contentString
        });

        marker.addListener('click', function() {
            // marker.infoWindow.open(map, marker);
            openCarMarker(marker.id)
        });
    }
}

function initUserMarker () {
    //Init User Marker
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var image = 'images/icons/you-are-here-2.png';
            var userMarker = new google.maps.Marker({
                position: pos,
                map: map,
                animation: google.maps.Animation.BOUNCE,
                icon: image
            });
            setTimeout(function (){
                userMarker.setAnimation(google.maps.Animation.NONE);
                // infoWindow.close();
            }, 5000);
        }, function() {
            console.log('Cant find user location')
        });
    }
}

function goBookPage(carId) {
    window.location.replace('book/'+carId);
}

function openCarMarker (carId) {
    for (let marker of carMarkers) {
        marker.infoWindow.close()
    }
    let tobeOpenMarker = carMarkers.find(marker => marker.id === carId);
    tobeOpenMarker.infoWindow.open(map, tobeOpenMarker);
}

function openClusterMarker (cluster) {
    for (let marker of carMarkers) {
        marker.infoWindow.close()
    }
    for (let clusterInfoWindow of clusterInfoWindows) {
        clusterInfoWindow.close()
    }
    var contentString = '<div id="content">'+
        '<h5 id="firstHeading" class="firstHeading">Cars in here:</h5>'+
        '<div id="bodyContent">'+
        '<ul class="list-group list-group-flush">';

    for (let marker of cluster.getMarkers()){
        contentString += '<li class="list-group-item d-flex justify-content-between align-items-center" onclick="goBookPage('+marker.carData.id+')">'+
            marker.carData.model+
            '<span class="badge badge-primary badge-pill">$10/hrs</span></li>'
    }

    contentString += '</ul>'+
                '</div>'+
        '</div>';

    let infoWindow = new google.maps.InfoWindow({
        content: contentString
    });

    clusterInfoWindows.push(infoWindow)

    infoWindow.setPosition(new google.maps.LatLng(cluster.getCenter().lat(), cluster.getCenter().lng()))
    infoWindow.open(map)
}