
<?php
    include_once "headerA.php";
?>

<?php
	include "menu.php"
?>
  <main class="content">
  <h1>Interactive Map</h1>
  <hr>

    <!--The div element for the map -->
    <div id="map"></div>
</main>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmfQbwIiFdTVhFX0zls1xXtKheZwykfP4=&callback=initMap&v=weekly"
      async
    ></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>
  <script>
  // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script>

<?php
    include_once "footerA.php";
?>
