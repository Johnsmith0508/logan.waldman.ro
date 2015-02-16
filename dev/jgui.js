function jGuiConstruct(element){
	this.node = document.querySelector(element);
	this.element = document.getElementById(element.substring(1,element.length));
}

var jGui = function(element){return new jGuiConstruct(element);};

jGuiConstruct.prototype.test = function(){alert("Hello");};
jGuiConstruct.prototype.makeBtn = function(){
	console.log(this.node,this.element);
	this.elelment.addEventListner("click", function(){
		var oldColor = document.defaultView.getComputedStyle(this.node,null).getPropertyValue("background-color");
		this.node.style.backgroundColor("green");
		setTimeout(this.node.style.backgroundColor(oldColor),500);
	});
};

jGuiConstruct.prototype.dragable = function()
{
	element = this.node;
	this.node.addEventListener("mousedown",function()
		{
		console.log(window.event.clientX,window.event.clientY,elemnet);
		this.mouseX = window.event.clientX;
		this.mouseY = window.event.clientY;
		});
	this.node.addEventListener("mouseup",function()
		{
		console.log(this.element);
		this.node.style.left = window.event.clientX;
		this.node.style.top = window.event.clientY;
	});
};

jGuiConstruct.prototype.flash = function(color) {
	var oldColor = window.getComputedStyle(node).getPropertyValue("color");
	node.style.color(color);
	setTimeout(node.style.color(oldColor),500);
};

window.jGui = window.$ = jGui;




var Cthulhu= "Hͫ̆̒̐ͣ̊̄ͯ͗͏̵̗̻̰̠̬͝ͅE̴̷̬͎̱̘͇͍̾ͦ͊͒͊̓̓̐_̫̠̱̩̭̤͈̑̎̋ͮͩ̒͑̾͋͘Ç̳͕̯̭̱̲̣̠̜͋̍O̴̦̗̯̹̼̭ͭ̐ͨ̊̈͘͠M̶̝̠̭̤̻͓͑̓̊ͣͤ̎͟͠E̢̞̮̹͍̞̳̣ͣͪ͐̈T̡̯̳̭̜̠͕͌̈́̽̿ͤ̿̅̑Ḧ̱̱̺̰̳̹̘̰́̏ͪ̂̽͂̀͠";



var lambda = "λ";
