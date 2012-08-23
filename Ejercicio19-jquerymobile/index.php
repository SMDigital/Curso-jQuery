<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>SMDigital</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!--	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>-->
        <script src="jquerymobile.js"></script>
</head> 

	
<body> 

<!-- pagina 1 -->
<div data-role="page" id="inicio" data-title="Inicio">

	<div data-role="header">
		<h1>SMDigital Movil</h1>
	</div><!-- /header -->

	<div data-role="content" >	
            <center>
            <img src="SMDigitalsmall.gif" /><br>
                SMDigital es una agencia multilatina, full service </center>
		<h3>Secciones:</h3>
		<p><a href="#contacto" data-role="button" data-transition="pop">Contacto</a></p>	
		<p><a href="ubicacion.php" data-role="button" rel="external">Ubicacion</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>www.smdigital.com.co</h4>
	</div><!-- /footer -->
</div><!-- /pagina 1 -->
<!-- pagina contacto -->
<div data-role="page" id="contacto" data-title="Inicio">

	<div data-role="header">
		<h1>SMDigital Movil</h1>
	</div><!-- /header -->

	<div data-role="content" >	
            <center>
             <img src="SMDigitalsmall.gif" /><br>
                <strong> Para comunicarte con nosotros:</strong><br>
                 <a href="mailto:csuarez@smdigital.com.co" class="ui-link-inherit">csuarez@smdigital.com.co</a><br>
                <a href="tel:0344448968" class="ui-link-inherit">Telefono:57-4-444 85 66</a>
		<h3>Secciones:</h3>
		<p><a href="#inicio" data-role="button" rel="external" data-transition="pop">Inicio</a></p>	
		<p><a href="ubicacion.php" data-role="button" rel="external">Ubicacion</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>www.smdigital.com.co</h4>
	</div><!-- /footer -->
</div><!-- /pagina 1 -->

</body>
</html>