// 第一种方法
var obj1 = {
	name: 'wanmingniu',
	sex: 'male',
	show: function() {
		document.write('I am ' + this.name + ', ' + this.sex + '<br/>');
	}
}
obj1.show();
// 第二种方法
function Person(name, sex) {
	this.name = name;
	this.sex = sex;
	this.show = function() {
		document.write('I am ' + this.name + ', ' + this.sex + '<br/>');
	}
}
var xinxin = new Person('xinxin', 'male');
var wanmingniu = new Person('wanmingniu', 'male');
xinxin.show();
wanmingniu.show();
// 第三种方法
var obj2 = new Object;
obj2.name = 'wanmingniu';
obj2.sex = 'male';
obj2.show = function() {
	document.write('I am ' + this.name + ', ' + this.sex + '<br/>');
}
obj2.show();