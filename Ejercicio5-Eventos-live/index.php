<!DOCTYPE html>
<html>
<head>
  <style>
  body{ background: #CCCCCC; }

  </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
    <div id="total">1</div><br>
    <div id="galeria">
    <img src="obama.jpg" width="80px" />
</div>
 
<script>

 $("document").ready(function(){ 
       
    /*
    *Evento asignado con on
    *$("img").on("click", function(){
    $(this).after("<img src='obama.jpg' width='60px'  />");
    });*/
    $("img").live("click",add );


})

function add(e){
    
  console.log(e)
  $("#galeria").append("<img src='obama.jpg' width='80px'  />");
  //Miramos la cantidad de imagenes agregadas
  var size2=$("img").length;
  
    console.log(size2)
  if(size2==5){
     
     $("img").die("click")
     
 }
 $("#total").text(size2)
}



</script>

</body>
</html>