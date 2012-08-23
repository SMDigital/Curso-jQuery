<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Droppable - Default functionality</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
        <script src="jquery-ui-1.8.20.custom.min.js"></script>
	<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }</style>

<script>
	$(function() {
		$( "#sortable" ).sortable( { cursor: 'crosshair' });
                

	});
	</script>
</head>
<body>

<div class="demo">

<ul id="sortable">
	<li class="item">Item 1</li>
	<li class="item">Item 2</li>
	<li class="item">Item 3</li>
	<li class="item">Item 4</li>
	<li class="item">Item 5</li>
	<li class="item">Item 6</li>
	<li class="item">Item 7</li>
        <div>Otro Elementos</div>
</ul>

    

</div>






</body>
</html>
