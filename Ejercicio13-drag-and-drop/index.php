<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Droppable - Default functionality</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
        <script src="jquery-ui-1.8.20.custom.min.js"></script>
<!--	<script src="../../ui/jquery.ui.core.js"></script>
	<script src="../../ui/jquery.ui.widget.js"></script>
	<script src="../../ui/jquery.ui.mouse.js"></script>
	<script src="../../ui/jquery.ui.draggable.js"></script>
	<script src="../../ui/jquery.ui.droppable.js"></script>
	<link rel="stylesheet" href="../demos.css">-->
        <link rel="stylesheet" href="themes/base/jquery.ui.all.css">
        <link rel="stylesheet" href="estilos.css">

	<script>
	$(function() {
            var j=0;
		$( ".contenido" ).draggable();
                
                //$( ".contenedor" ).resizable();
               
		$( ".contenedor" ).droppable({
                    over: function(event, ui) { 
                        
                         }
});
			drop: function( event, ui ) {
                           //j++;
				$( this )
					.addClass( "ui-state-highlight" )
					.find( "p" )
						.html( "Termino!" );
                                                $( ".contenido" ).draggable({ disabled: true });
			}
		});
                 
               
	});
	</script>
</head>
<body>

<div class="demo">
	
<div id="draggable" class="contenido">
	<p>Arrastrar</p>
</div>
    
    <div id="draggable" class="contenido">
	<p>Arrastrar 2</p>
</div>

<div id="droppable" class="contenedor">
	<p>Arrastre aqui</p>
</div>

</div>





</body>
</html>
