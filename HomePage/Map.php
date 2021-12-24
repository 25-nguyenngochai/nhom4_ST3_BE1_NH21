<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="map" style="width:100%;height:640px;"></div>
    <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBadKqsUs8PQn8j7FtgvcxQvPekwu3PpzQ&callback=initMap" async
    defer></script>
<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 10.851796,
            lng: 106.757491
        },
        zoom: 16
    });

    var latLng = {
        lat: 10.851796,
        lng: 106.757491
    }

    // create map with center is latLng
    // code

    // each marker define one point
    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
    });

    var latLng = {
        lat: 21.0168864,
        lng: 105.7855574
    }
    var markers = [];

    // create map with center is latLng
    // code

    var geocoder = new google.maps.Geocoder;
    var infowindow = new google.maps.InfoWindow();

    map.addListener("click", function(e) {
        // Clear all old markers after click
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null)
        }
        markers = [];

        // Create new marker with position is e.latLng
        // code

        geocoder.geocode({
                "location": e.latLng
            },
            function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        infowindow.setContent(
                            "<div>" +
                            "<b>Address :</b> " + results[0].formatted_address + "<br>" +
                            "<b>Latitude :</b> " + results[0].geometry.location.lat() + "<br>" +
                            "<b>Longitude :</b> " + results[0].geometry.location.lng() +
                            "</div>"
                        );
                        infowindow.open(map, marker);
                    } else {
                        console.log("No results found");
                    }
                } else {
                    console.log("Geocoder failed due to: " + status);
                }
            }
        );

        map.panTo(marker.position); // Set new point to center of map

        markers.push(marker); // add new marker to markers array
    });
}
</script>
</body>
</html>