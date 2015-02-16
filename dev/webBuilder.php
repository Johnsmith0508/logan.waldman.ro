<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="/js/jqueryui/jquery-ui.min.css">
		<link rel="stylesheet" href="/js/jqueryui/jquery-ui.theme.min.css">
		<link rel="stylesheet" href="/js/jqueryui/jquery-ui.structure.min.css">
		<link rel="stylesheet" href="webBuilderStyle.css">
		<script src="/js/jqueryui/external/jquery/jquery-min.js"></script>
		<script src="/js/jqueryui/jquery-ui.min.js"></script>
		<script src="webBuilderScript.js"></script>
	</head>
	<body>
		<div id="leftBar">
			<ul class="menu" id="leftMenu">
				<li id="createText">New TextBox</li>
				<li>look</li>
				<li>at</li>
				<li>this</li>
				<li><b>AMAZING</b></li>
				<li>list</li>
				<li id="displayHelp">Help</li>
			</ul>
		</div>
		
		<div id="NewElementLocation"></div>
		<div id="editContainer">
			<form>
				<fieldset>
					<textarea rows="5" cols="55" id="changeTxt"></textarea>
				</fieldset>
			</form>
		</div>
		
		<div id="helpMenu">
			<p>
				Click "new textbox" to create a new text box that is resizeable and moveable<br>
				right click on an element to delete or edit it
			</p>
		</div>
		
		<div id="menuContainer">
			<ul class="menu" id="contextMenu">
				<li id="mDelete">delete</li>
				<li id="mEdit">edit text</li>
			</ul>
		</div>
	</body>
</html>
