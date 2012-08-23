
<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>SMDigital</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
           <style type="text/css">

      #map_canvas { height: 100% }

    </style>
             <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBRaBXZiQ4zH5pv5wEpPpbve-TnHe2vQws&sensor=true">
    </script>
     <script type="text/javascript">
      function initialize() {
var myLatlng = new google.maps.LatLng(6.25,-75.59);
  var myOptions = {
    zoom: 7,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:"Hello World!"
  });
      }
    </script>
</head> 

	
<body onload="initialize()"> 

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-title="Ubicacion">

	<div data-role="header">
		<h1>Ubicación</h1><a data-rel="back" >Volver</a>
	</div><!-- /header -->

	<div data-role="content" >	
             <div id="map_canvas" style="width:100%; height:140px"></div>
		<h3>Secciones:</h3>
		<p><a href="index.php" data-role="button" rel="external">Inicio</a></p>	
		<p><a href="index.php#contacto" data-role="button" rel="external">Contacto</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>www.smdigital.com.co</h4>
	</div><!-- /footer -->
</div><!-- /page one -->


</body>
</html>