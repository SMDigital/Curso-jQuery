<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Droppable - Default functionality</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
        <script src="jquery-ui-1.8.20.custom.min.js"></script>
<style>
		.toggler { width: 800px;  position: relative;height: auto;overflow: auto; }
		#button { padding: .5em 1em; text-decoration: none; }
		#effect { width: 240px;  padding: 0.4em; position: relative; background: #fff; }
		#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
	</style>
	<script>
	$(function() {
		$( "#button" ).toggle(
			function() {
				$( "#effect" ).animate({
					backgroundColor: "#aa0000",
					color: "#fff",
					width: 700
				}, 1000 );
			},
			function() {
				$( "#effect" ).animate({
					backgroundColor: "#fff",
					color: "#000",
					width: 240
				}, 1000 );
			}
		);
                    
                    var options = {};
                $( "#button2" ).click(function() {
			$( "#effect" ).toggle( "explode", options, 500 );
			return false;
		});  
	});
	</script>
</head>
<body>

<div class="demo">

<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3>Animate</h3>
		<p>
			En el lanzamiento del Samsung Galaxy S III, la firma también reveló una serie de accesorios diseñados especialmente para el smartphone. Y este lunes, a dos semanas de la salida al mercado del teléfono en Europa, fueron mostrados los primeros de ellos a la prensa: una funda especial, un cargador con ‘dock’ y un ‘stylus’.

La tienda británica MobileFun publicó tres videos en los que muestra cómo serán estos accesorios. La funda será de plástico duro y se adaptará perfectamente al teléfono. Vendrá en varios colores y su principal novedad consistirá en que tendrá también un tapa para la parte delantera del S III. Según el sitio, valdrá 30 libras esterlinas (48 dólares).
		</p>
	</div>
</div>

<a href="#" id="button" class="">Lanzar Transicion</a>
<a href="#" id="button2" class="">Mostrar</a>

</div>






</body>
</html>
