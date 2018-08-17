//Javascript for car simulation
//Curtis Maunder

//Storing car locations
var car1 = new google.maps.LatLng(-37.816102, 144.952744);
var car2 = new google.maps.LatLng(-37.812951, 144.952162);
var car3 = new google.maps.LatLng(-37.812951, 144.952162);
var car4 = new google.maps.LatLng(-37.809191, 144.966418);
var car5 = new google.maps.LatLng(-37.816357, 144.964255);

//Get user's location (just for the sake of centering the map)
window.onload = function() {
    // Check to see if the browser supports the GeoLocation API.
    if (navigator.geolocation) {
        // Get the location
        navigator.geolocation.getCurrentPosition(function(position) {

            //Store and show users location
            //Google maps uses latitude and longitude
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;

            showMap(lat, lon);
        });
    } else {
        //Inform the user they cannot use the "find me" feature
        document.getElementById('error').innerHTML = "Sorry. You are unable to use GeoLocation";
    }
}

// Show the user's position on a Google map.
function showMap(lat, lon) {
    var userLocation = new google.maps.LatLng(lat, lon);

    // Map Options
    var mapOptions = {
        zoom: 8,
        center: userLocation,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Generate the map and add the user marker
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var userMarker = new google.maps.Marker({
        position: userLocation,
        map: map,
        title: 'User Location'
    });

    //Create animatable symbol for the car
    var carSymbol = {
        path: google.maps.SymbolPath.FORWARD_OPEN_ARROW,
        scale: 8,
        strokeColor: '#393'
    };

// Create a line to move the car along
    var line = new google.maps.Polyline({
        path: [car1, car2],
        icons: [{
            icon: carSymbol,
            offset: '100%'
        }],
        map: map
    });

    animateCars(line);

}

// Use the DOM setInterval() function to change the offset of the symbol
// at fixed intervals.
function animateCars(line) {
    var count = 0;
    window.setInterval(function() {
        count = (count + 1) % 200;

        var icons = line.get('icons');
        icons[0].offset = (count / 2) + '%';
        line.set('icons', icons);
    }, 20);
}