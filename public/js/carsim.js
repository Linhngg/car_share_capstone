//Javascript for car simulation
//Curtis Maunder

//Get user's location (just for the sake of centering the map)
window.onload = function() {
    carPaths();
    showMap();
}

// Initialize the cars paths and set them to their first node
function carPaths(){
    for(var i = 0; i < cars.length; i++){
        for(var j = 0; j < 5; j++){
            cars[i].path[j] = nodes[Math.floor((Math.random() * nodes.length))];
        };
        cars[i].dLat = (cars[i].path[0].lat() - cars[i].lat)/1000;
        cars[i].dLng = (cars[i].path[0].lng() - cars[i].lng)/1000;
    };
}

// Show the user's position on a Google map.
function showMap() {
    // Map Options
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(-37.836711, 144.914824),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Generate the map and add the user marker
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    for(var i = 0; i < cars.length; i++){
        carMarkers[i] = new google.maps.Marker({
            position: new google.maps.LatLng(cars[i].lat, cars[i].lng),
            map: map,
            title: cars[i].make,
        });
    };

    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

    var node1Marker = new google.maps.Marker({
        position: cars[0].path[0],
        map: map,
        title: 'node1',
        icon: image
    });

    var node2Marker = new google.maps.Marker({
        position: cars[1].path[0],
        map: map,
        title: 'node1',
        icon: image
    });

    var node3Marker = new google.maps.Marker({
        position: cars[2].path[0],
        map: map,
        title: 'node1',
        icon: image
    });

    var node4Marker = new google.maps.Marker({
        position: cars[3].path[0],
        map: map,
        title: 'node1',
        icon: image
    });

    var node5Marker = new google.maps.Marker({
        position: cars[4].path[0],
        map: map,
        title: 'node1',
        icon: image
    });

    animateCars();
}

function nextNode(car, node){
    cars[car].path[node] = nodes[Math.floor((Math.random() * nodes.length))];
    cars[car].dLat = (cars[car].path[node].lat() - cars[car].lat)/1000;
    cars[car].dLng = (cars[car].path[node].lng() - cars[car].lng)/1000;
}

// Use the DOM setInterval() function to change the offset of the symbol
// at fixed intervals.
function animateCars() {;
    var dLng, dLat, range;
    window.setInterval(function() {
        for(var i = 0; i < cars.length; i++){
            if(!cars[i].finished){
                cars[i].lat += cars[i].dLat;
                cars[i].lng += cars[i].dLng;

                carMarkers[i].setPosition(new google.maps.LatLng(cars[i].lat, cars[i].lng));

                dLng = cars[i].lng - cars[i].path[cars[i].nodesVisited].lng();
                dLat = cars[i].lat - cars[i].path[cars[i].nodesVisited].lat();
                range = Math.sqrt((dLng * dLng) + (dLat * dLat)) * 1000;
            }
            if(i == 0)
                console.log(range);
            if(range < 0.005){
                cars[i].nodesVisited++;
                if(cars[i].nodesVisited < 5)
                    nextNode(i, cars[i].nodesVisited);
                else
                    cars[i].finished = true;
            }
        }
    }, 0.005);
}