function printName() {
	document.write(this.name + "<br/>");
}
printName(); //打印空
window.name = 'window';
printName(); //打印window
var xinxin = {};
xinxin.name = 'xinxin';
//xinxin.printName(); //Error, xinxin has no function printName
printName.apply(xinxin);