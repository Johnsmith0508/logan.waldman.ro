<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="js/jqueryui/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="js/jqueryui/jquery-ui.theme.css" />
		<script src="js/jqueryui/external/jquery/jquery.js" />
		<script src="js/jqueryui/jquery-ui.js" />
		<style>
			#draggable { width: 150px; height: 150px; padding: 0.5em; }
		</style>
		<script>
			$(function() {
				$( "#draggable" ).draggable();
			});
		</script>
	</head>
	<body>
	<div id="draggable" class="ui-widget-content">
		<p>Drag this element arround</p>
	</div>
	</body>
</html>
