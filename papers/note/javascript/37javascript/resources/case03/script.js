var Person = function(name, sex) {
	var age = 0;
	this.hello = function() {
		document.write("hello, i am " + name + ", i am " + age + " years old<br/>");
	}
	this.innergrow = function() {
		age++;
	}
}
Person.prototype.grow = function() {
	//age++; 	Error : age is not defined
	this.age++;
}
var xinxin = new Person('xinxin', 'male');
xinxin.hello();
xinxin.grow();
xinxin.hello();
xinxin.innergrow();
xinxin.hello();