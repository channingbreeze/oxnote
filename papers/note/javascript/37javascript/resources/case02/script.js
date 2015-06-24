var Person = function(name, sex) {
	this.name = name;
	this.sex = sex;
	this.hello = function() {
		document.write("hello " + this.name + "<br/>");
	}
	this.tellAge = function() {
		document.write("i am " + this.age + "<br/>");
	}
}
Person.life = 100;
Person.tellLife = function() {
	document.write("I can live " + Person.life + " years<br/>");
}
Person.prototype.age = 0;
Person.prototype.grow = function() {
	this.age++;
}
var xinxin = new Person('xinxin', 'male');
xinxin.hello();
//xinxin.tellLife(); error,xinxin has no tellLife function
Person.tellLife();
xinxin.tellAge();
xinxin.grow();
xinxin.tellAge();
var wanmingniu = new Person('wanmingniu', 'male');
wanmingniu.hello();
wanmingniu.tellAge();