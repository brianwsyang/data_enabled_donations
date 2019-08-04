function main() {
    initMap();
}

function initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    var usa_ctr = {lat: 37.09, lng: -95.71};
    // The map, centered at USA
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: usa_ctr});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});

}

main();