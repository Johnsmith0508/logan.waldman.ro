
window.oncontextmenu = function(){return false;};
var textNum = 0;
var focus;
$(function() 
{
	var menu = $("ul.menu").menu();
	var help = $("#helpMenu").dialog({
		resizable: false,
		width: 520,
		title: "Help",
		buttons: [{
			text: "Done",
			click: function(){
				$(this).dialog("close");
			}
		}]
	});
	
	var edit = $("#editContainer").dialog({
		resizable: false,
		width: 520,
		title: "Edit Text",
		buttons: [{
			text: "submit",
			click: function(){
				$("#"+focus+" p").html($("#changeTxt").val());
				$(this).dialog("close");
			}
		}]
	});
	$("ul.menu#contextMenu").hide();
	edit.dialog("close");
	help.dialog("close");
	
	$("#mDelete").on("click", function () {
		$("#"+focus).remove();
	});
	
	$("#mEdit").on("click", function(e) {
		$("#changeTxt").val($("#"+focus+" p").html());
		edit.dialog("open");
	});
	
	$("#displayHelp").on("click", function(e)
	{
		help.dialog("open");
	});
	
	$("#createText").on("click", function(event){
		$("#NewElementLocation").append("<div id='textBox"+textNum+"' class='ui-widget-content dragBox' style='left:160px; top: 5px'> <p>Sample Text</p> </div>" );
		$("#textBox"+textNum).draggable({containment: "parent"}).resizable().bind("contextmenu",function(e) {
			focus = e.target.id;
			$("ul.menu#contextMenu").show();
			$("#menuContainer").css({
				left:  e.pageX + 20,
				top:   e.pageY
			});
		});
		textNum++;
	});
	
	$(document).on("mouseup", function () {
    	$("ul.menu#contextMenu").hide();
	});
});
function removeMenu()
{
	$("ul.menu").hide();
}
/*

		$("#draggable").clone().appendTo("body");
		
*/