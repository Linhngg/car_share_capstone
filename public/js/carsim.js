//Javascript for car simulation
//Curtis Maunder

//Storing car locations
//var car1 = new google.maps.LatLng(-37.816102, 144.952744);
//var car2 = new google.maps.LatLng(-37.812951, 144.952162);
//var car3 = new google.maps.LatLng(-37.812951, 144.952162);
//var car4 = new google.maps.LatLng(-37.809191, 144.966418);
//var car5 = new google.maps.LatLng(-37.816357, 144.964255);

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

            var dLat = (node1.lat() - car1.lat)/1000;
            var dLng = (node1.lng() - car1.lng)/1000;

            showMap(lat, lon, dLat, dLng);
        });
    } else {
        //Inform the user they cannot use the "find me" feature
        document.getElementById('error').innerHTML = "Sorry. You are unable to use GeoLocation";
    }


}

// Show the user's position on a Google map.
function showMap(lat, lon, dLat, dLng) {
    var userLocation = new google.maps.LatLng(lat, lon);

    // Map Options
    var mapOptions = {
        zoom: 16,
        center: node1,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Generate the map and add the user marker
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var car1Marker = new google.maps.Marker({
        position: new google.maps.LatLng(car1.lat, car1.lng),
        map: map,
        title: 'car1'
    });

    var node1Marker = new google.maps.Marker({
        position: node1,
        map: map,
        title: 'node1'
    });

    animateCars(dLat, dLng, car1Marker, car1);
}

// Use the DOM setInterval() function to change the offset of the symbol
// at fixed intervals.
function animateCars(dLat, dLng, car1Marker) {
    window.setInterval(function() {
        car1.lat += dLat;
        car1.lng += dLng;

        car1Marker.setPosition(new google.maps.LatLng(car1.lat, car1.lng));
    }, 20);
}