<!DOCTYPE html>
<html>
  <head>
    <title>Gabbie v1.0</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
	
      #map {
        height: 100%;
      }
	  
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $_POST["latitude"]; ?>, lng: <?php echo $_POST["longitude"]; ?>},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY3s5DrOQllPo7v4m_8BVg2slKzWjR4iA&callback=initMap" async defer>
	</script>
  </body>
</html>