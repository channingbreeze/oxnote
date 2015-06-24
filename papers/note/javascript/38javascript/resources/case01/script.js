// 第一种方法
var xinxin = {};
xinxin.name = 'xinxin';
document.write(xinxin.name + "<br/>");

// 第二种方法
var Person = function(name) {
	this.name = name
}
var xinxin = new Person('xinxin');
document.write(xinxin.name + "<br/>");

// 第三种方法
var temp = new Object();
temp.name = 'xinxin'; //第二种方法的this就是新对象
var xinxin = temp;
document.write(xinxin.name + "<br/>");