

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="home2">Campus Map</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home2">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup">Preferences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="browse">Browse Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report">Report a Barrier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About </a>
          </li>
        </ul>
      </div>
    </nav>

    <!--Google map-->
    <!-- <div id="map-container-google-2" class="map-container" style="height: 100%; width: 100%">
      <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
    </div> -->
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.css' type='text/css' />
    <div id="map" style = "width: 100%; height: 500px; position: absolute;"></div>

<!--Google Maps-->

    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiamFja2hkMSIsImEiOiJjanRocW14OWswZGxzNDRraWdldGVncGg5In0.AZLQ9SNy0Can9athrkiFFQ';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-80.422059, 37.227549,],
        zoom: 15
      });
      var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        proximity: [-80.41062, 37.22629]
      });

      map.addControl(geocoder);
      map.addControl(new mapboxgl.GeolocateControl({
        positionOptions: {
          enableHighAccuracy: true
        },
        trackUserLocation: true
      }));
      map.on('load', function() {
      // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
      // makes a selection and add a symbol that matches the result.
        geocoder.on('result', function(ev) {
          new mapboxgl.Marker()
          .setLngLat(ev.result.center)
          .addTo(map);
          alert('To navigate to a location use browse locations');

        });
      });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
