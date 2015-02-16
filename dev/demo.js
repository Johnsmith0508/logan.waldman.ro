var kitten = function()
{
  this.name = "name";
  this.color = "purple";
  this.gender="yes";
  }
kitten.prototype.setName = function(color)
{
  this.name = color;
  return this;
  }


var bob = new kitten().setName("bob");
console.log(bob.name);
console.log(bob.name);
