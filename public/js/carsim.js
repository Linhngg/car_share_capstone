//Javascript for car simulation
//Curtis Maunder

//Get user's location (just for the sake of centering the map)
window.onload = function() {
    console.log("carsim");
    showMap();
}

// Show the user's position on a Google map.
function showMap() {
    // Map Options
    var mapOptions = {
        zoom: 16,
        center: node1,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Generate the map and add the user marker
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    console.log(car1.id);

    var car1Marker = new google.maps.Marker({
        position: new google.maps.LatLng(car1.lat, car1.lng),
        map: map,
        title: car1.make,
    });

    var node1Marker = new google.maps.Marker({
        position: node1,
        map: map,
        title: 'node1'
    });

    var dLat = (node1.lat() - car1.lat)/1000;
    var dLng = (node1.lng() - car1.lng)/1000;

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