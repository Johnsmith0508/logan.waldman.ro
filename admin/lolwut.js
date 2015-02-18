$(function(){
	$("#submit").on("click", function(){
		$.post("lolwutcontrol.php",{
			command : $("#inputBox").val()
		});
	});
});