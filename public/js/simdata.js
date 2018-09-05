//Cars
console.log("simdata");
var carMarkers = [];

//Path nodes
//Path nodes are hard coded
var nodes = [
    new google.maps.LatLng(-37.836711, 144.914824),
    new google.maps.LatLng(-37.83234, 144.91224),
    new google.maps.LatLng(-37.82259, 144.91129),
    new google.maps.LatLng(-37.78204, 144.90889),
    new google.maps.LatLng(-37.79133, 144.91868),
    new google.maps.LatLng(-37.78441, 144.94957),
    new google.maps.LatLng(-37.79628, 144.9609),
    new google.maps.LatLng(-37.80998, 144.95532),
    new google.maps.LatLng(-37.81168, 144.93696),
    new google.maps.LatLng(-37.81107, 144.94563),
    new google.maps.LatLng(-37.82348, 144.9579),
    new google.maps.LatLng(-37.82036, 144.95833),
    new google.maps.LatLng(-37.81615, 144.95223),
    new google.maps.LatLng(-37.81554, 144.9391),
    new google.maps.LatLng(-37.8192, 144.96082),
    new google.maps.LatLng(-37.82158, 144.9652),
    new google.maps.LatLng(-37.82246, 144.96871),
    new google.maps.LatLng(-37.82666, 144.967),
    new google.maps.LatLng(-37.83202, 144.95687),
    new google.maps.LatLng(-37.83114, 144.9385),
    new google.maps.LatLng(-37.843, 144.9615),
    new google.maps.LatLng(-37.84808, 144.97653),
    new google.maps.LatLng(-37.84551, 144.98159),
    new google.maps.LatLng(-37.86733, 144.97644),
    new google.maps.LatLng(-37.84612, 144.9924),
    new google.maps.LatLng(-37.83256, 144.99575),
    new google.maps.LatLng(-37.82442, 144.99258),
    new google.maps.LatLng(-37.81697, 144.99292),
    new google.maps.LatLng(-37.81236, 145.01146),
    new google.maps.LatLng(-37.81453, 144.97893),
    new google.maps.LatLng(-37.81181, 144.9676),
    new google.maps.LatLng(-37.80937, 144.96511),
    new google.maps.LatLng(-37.81141, 144.96202),
    new google.maps.LatLng(-37.80469, 144.97155),
    new google.maps.LatLng(-37.80323, 144.97153),
    new google.maps.LatLng(-37.7933, 144.96734),
    new google.maps.LatLng(-37.79791, 144.9676),
    new google.maps.LatLng(-37.79866, 144.9779),
    new google.maps.LatLng(-37.79717, 145.0112),
    new google.maps.LatLng(-37.803, 144.90683)
];

//End points
//Cars need to start and end at any of these designated points
