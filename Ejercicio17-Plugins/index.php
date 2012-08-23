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
jQuery.fn.extend({  
        fijarTexto: function(texto,activeColor,disabledColor){  
            /*Recorre todos los elementos encapsulados*/  
            this.each(function(){  
               
                var $this = jQuery(this); //Convertimos a jQuery  
                /*Esto es para la primera vez*/  
                $this.css("color",disabledColor).val(texto);  
                /*Cuando recibe el foco, si está el texto por defecto, lo borra y cambia el color*/  
                $this.focus(function(){  
                    if($this.val() == texto){  
                        $this.val("").css("color",activeColor);  
                    }  
                });  
                /*Cuando pierde el foco, si está vacío, pone el texto por defecto y cambia el color*/  
                $this.blur(function(){  
                    if(jQuery.trim($this.val()).length==0){  
                        $this.css("color",disabledColor).val(texto);  
                    }  
                });  
            });  
       }  
});
        $(document).ready(function(){  
        $("#login").fijarTexto("Usuario","#000","#BCBCBC");  
        $("#password").fijarTexto("Contraseña", "#000","#BCBCBC");  
});
	</script>
</head>
<body>

	<form action="" method="post">
		<input id="login" type="text"/>
		<input id="password" type="password"/>
	</form>






</body>
</html>
