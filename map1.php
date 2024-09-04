<!DOCTYPE html>
<html>
<head>
  <title>Shop Location</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  <!-- Leaflet JavaScript -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <!-- Leaflet Routing Machine CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

  <!-- Leaflet Routing Machine JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

  <style>
    #map {
      height: 450px;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <button id="locate-btn" style="position: absolute; bottom: 20px; right: 20px; z-index: 1000;"><i class="fa-solid fa-location-crosshairs"></i></button>

  <script>

  document.getElementById('locate-btn').addEventListener('click', function() {
    map.setView([27.159653, 77.916266], 16); // Pan to the shop location with zoom level 16
  });
    var map = L.map('map').setView([27.159653, 77.916266], 13); // Default center at shop location

    // Load and display tile layer on the map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Change the default blue marker icon to a red marker icon
    var redIcon = L.icon({
      iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
      shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/images/marker-shadow.png',
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41]
    });

    // Add a red marker at the shop location
    var shopMarker = L.marker([27.159653, 77.916266], { icon: redIcon }).addTo(map)
      .bindPopup('Dk Upraity Handicraft in Agra, UP')
      .openPopup();

    // Function to handle location found
    function onLocationFound(e) {
      var radius = e.accuracy / 2;

      // Remove any existing user location marker (if any)
      map.eachLayer(function (layer) {
        if (layer instanceof L.Marker && layer !== shopMarker) {
          map.removeLayer(layer);
        }
      });

      // Only show accuracy message and marker if the locate button has been clicked
      if (locateClicked) {
        L.marker(e.latlng).addTo(map)
        //   .bindPopup("You are within " + radius + " meters from this point").openPopup();
      }

      // Create routing control with user's location as the starting point
      L.Routing.control({
        waypoints: [
          L.latLng(e.latlng.lat, e.latlng.lng), // User's location as the starting point
          L.latLng(27.159653, 77.916266) // Shop location as the destination
        ],
        routeWhileDragging: true,
        geocoder: L.Control.Geocoder.nominatim({
          geocodingQueryParams: {
            countrycodes: 'IN' // Limit geocoding results to India
          }
        }),
        router: L.Routing.osrmv1({
          serviceUrl: 'https://router.project-osrm.org/route/v1',
          profile: 'foot' // Change profile to 'car', 'bike', or 'foot' as needed
        })
      }).addTo(map);
    }

    // Function to handle location error
    function onLocationError(e) {
      alert(e.message);
    }

    var locateClicked = true;

    // Locate the user's current location and handle events
    map.on('locationfound', onLocationFound);
    map.on('locationerror', onLocationError);

    // Function to handle button click to locate user
    // document.getElementById('locate-btn').addEventListener('click', function() {
    //   locateClicked = true;
      map.locate({setView: true, maxZoom: 16});
    // });

  </script>
</body>
</html>
