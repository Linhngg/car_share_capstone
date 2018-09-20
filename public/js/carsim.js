//Javascript for car simulation
//Curtis Maunder
var map;

window.onload = function() {
    var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-37.836711, 144.914824),
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

// Generate the map and add the user marker
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    carPaths();
    showMap();
}

/*
(function($) {
    function initialize() {
            var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-37.836711, 144.914824),
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

// Generate the map and add the user marker
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

        carPaths();
        showMap();
    }
    $(document).ready(initialize);
})(jQuery)
*/


// Initialize the cars paths and set them to their first node
function carPaths(){
    for(var i = 0; i < cars.length; i++){
        for(var j = 0; j < 5; j++){
            cars[i].path[j] = nodes[Math.floor((Math.random() * nodes.length))];
        };
        cars[i].path[5] = carParks[Math.floor((Math.random() * carParks.length))];
        cars[i].dLat = (cars[i].path[0].lat() - cars[i].lat)/1000;
        cars[i].dLng = (cars[i].path[0].lng() - cars[i].lng)/1000;
    };
}

// Show the user's position on a Google map.
function showMap() {
    for(var i = 0; i < cars.length; i++){
        carMarkers[i] = new google.maps.Marker({
            position: new google.maps.LatLng(cars[i].lat, cars[i].lng),
            map: map,
            title: cars[i].make,
        });
    };

    animateCars();
}

function nextNode(car, node){
    cars[car].dLat = (cars[car].path[node].lat() - cars[car].lat)/1000;
    cars[car].dLng = (cars[car].path[node].lng() - cars[car].lng)/1000;
}

// Use the DOM setInterval() function to change the offset of the symbol
// at fixed intervals.
function animateCars() {;
    var dLng, dLat, range;
    window.setInterval(function() {
        for(var i = 0; i < cars.length; i++){
            if(!cars[i].finished && cars[i].running){
                cars[i].lat += cars[i].dLat;
                cars[i].lng += cars[i].dLng;

                carMarkers[i].setPosition(new google.maps.LatLng(cars[i].lat, cars[i].lng));

                dLng = cars[i].lng - cars[i].path[cars[i].nodesVisited].lng();
                dLat = cars[i].lat - cars[i].path[cars[i].nodesVisited].lat();
                range = Math.sqrt((dLng * dLng) + (dLat * dLat)) * 1000;
            }

            if(range < 0.005 && !cars[i].finished){
                cars[i].nodesVisited++;
                if(cars[i].nodesVisited <= 5)
                    nextNode(i, cars[i].nodesVisited);
                else if(cars[i].nodesVisited > 5){
                    cars[i].finished = true;
                    cars[i].running = false;
                }

                console.log(cars[i].nodesVisited);
            }
        }
    }, 0.005);
}

function viewNodes(index){
    var tmpId = "viewNode" + index;
    if(document.getElementById(tmpId).checked){
        for(var i = 0; i < cars[index].path.length; i++) {
            cars[index].pathMarkers[i] = new google.maps.Marker({
                position: new google.maps.LatLng(cars[index].path[i].lat(), cars[index].path[i].lng()),
                map: map,
                icon: image,
                title: "Car: " + index + ", Node: " + i,
            });
        }
    }else{
        for(var i = 0; i < cars[index].path.length; i++){
            cars[index].pathMarkers[i].setMap(null);
        }
    }
}

function viewEnd(index){
    var tmpId = "viewEnd" + index;
    console.log(cars[index].pathMarkers[0]);
    if(document.getElementById(tmpId).checked){
        cars[index].pathMarkers[5] = new google.maps.Marker({
            position: new google.maps.LatLng(cars[index].path[5].lat(), cars[index].path[5].lng()),
            map: map,
            icon: image,
            title: "Car: " + index + ", End",
        });
    }else{
        cars[index].pathMarkers[5].setMap(null);
    }
}