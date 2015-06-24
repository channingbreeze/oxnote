function Person(name) {
	this.name = name;
	this.show = function() {
		document.write("My name is " + this.name + ", I am " + Person.age + "<br/>");
	}
	this.grow = function() {
		Person.age++;
	}
};
Person.age = 18;
var xinxin = new Person('xinxin');
xinxin.show();
var wanmingniu = new Person('wanmingniu');
wanmingniu.show();
xinxin.grow();
document.write("xinxin has growed<br/>");
xinxin.show();
wanmingniu.show();
