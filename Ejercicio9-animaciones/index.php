<!DOCTYPE html>
<html>
<head>
  <style>
  body{ background: #CCCCCC; }

  </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(":submit").click(function(){
$("div").animate({
width:"280px", 

height: "500px"
},5000,function(){
    $(this).animate({height:"250px"})
    
});
});

})</script>
</head>
<body>
<div style="width:200px; height:200px;
background-color: gray; border:10px">El div</div>
<br />
<input value="Animate" type="submit"></body>

</body>
</html>