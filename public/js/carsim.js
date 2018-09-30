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
    showMap()
    haversine(nodes[1], nodes[2])

    $(document).ready(function(){
        $('.ajaxsubmit').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: window.aboutUsLink,
                method: 'post',
                data: {
                    id: activeCar.id,
                    lat: activeCar.lat,
                    long: activeCar.lng,
                    distance: activeCar.distance
                },
                success: function(result) {
                    alert('Success');
                },
                error: function(jqxhr, status, exception) {
                    alert('Exception:', exception, jqxhr, status);
                }
            })
        });
    });
};

// Initialize the cars paths and set them to their first node
function carPaths(){
    for(var i = 0; i < cars.length; i++){
        cars[i].distance = 1;
        for(var j = 0; j < 10; j++){
            cars[i].path[j] = nodes[Math.floor((Math.random() * nodes.length))];
            if(j == 0) {
                startPoint = new google.maps.LatLng(cars[i].lat, cars[i].lng);
                cars[i].distance += haversine(startPoint, cars[i].path[j]);
            }else
                cars[i].distance += haversine(cars[i].path[j - 1], cars[i].path[j]);
        };
        cars[i].path[10] = carParks[Math.floor((Math.random() * carParks.length))];
        cars[i].distance += haversine(cars[i].path[9], cars[i].path[10]);
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
    var distance = haversine(cars[car].path[node], cars[car].path[node - 1]);
    var ticks = 1000;
    if(distance < 1000)
        ticks = 200;
    else if(distance >= 1000 && distance < 2000)
        ticks = 300;
    else if(distance >= 2000 && distance < 5000)
        ticks = 700;
    else if(distance >= 5000)
        ticks = 1000;

    cars[car].dLat = (cars[car].path[node].lat() - cars[car].lat) / ticks;
    cars[car].dLng = (cars[car].path[node].lng() - cars[car].lng) / ticks;
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

            if(range < 0.005 && !cars[i].finished && cars[i].running){
                cars[i].nodesVisited++;
                if(cars[i].nodesVisited <= 10)
                    nextNode(i, cars[i].nodesVisited);
                else if(cars[i].nodesVisited > 10){
                    cars[i].finished = true;
                    cars[i].running = false;
                }
            }
        }
    }, 1);
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
    if(document.getElementById(tmpId).checked){
        cars[index].pathMarkers[10] = new google.maps.Marker({
            position: new google.maps.LatLng(cars[index].path[10].lat(), cars[index].path[10].lng()),
            map: map,
            icon: image,
            title: "Car: " + index + ", End",
        });
    }else{
        cars[index].pathMarkers[11].setMap(null);
    }
}

//Haversine is a method of calculating distance between two points
//Using latitude and longitude
//This doesnt take into account bearing because of the small distance travelled
function haversine(node1, node2){
    //Earth's radius is 6371km
    var r = 6371e3; // Earths radius in meters
    var lat1 = node1.lat() * Math.PI / 180;
    var lat2 = node2.lat() * Math.PI / 180;
    var deltalat = (node2.lat() - node1.lat()) * Math.PI / 180;
    var deltalng = (node2.lng() - node1.lng()) * Math.PI / 180;

    var a = Math.sin(deltalat / 2) * Math.sin(deltalat / 2) +
            Math.cos(lat1) * Math.cos(lat2) *
            Math.sin(deltalng / 2) * Math.sin(deltalng / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

    var d = r * c;

    return d;
}

function setActive(index){
    activeCar = cars[index];
}

function forceEnd(index){
    if(!cars[index].running)
        return;
    cars[index].lat = cars[index].path[10].lat();
    cars[index].lng = cars[index].path[10].lng();
    cars[index].nodesVisited = 11;
    cars[index].finished = true;
    cars[index].running = false;
    carMarkers[index].setPosition(new google.maps.LatLng(cars[index].lat, cars[index].lng));
}