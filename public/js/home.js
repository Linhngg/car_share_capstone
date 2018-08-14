
//First implimentation of user location function
//Curtis Maunder
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

    // Generate the map and add the marker
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var marker = new google.maps.Marker({
        position: userLocation,
        map: map,
        title: 'User Location'
    });
}
function toggleResultBox() {
    var rBox = document.getElementById("resultBox");
    if (rBox.style.display === "none") {
        rBox.style.display = "block";
    } else {
        rBox.style.display = "none";
    }
}