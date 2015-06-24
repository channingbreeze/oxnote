function add(a, b) {
	document.write(this.name + " can calculate " + a + "+" + b + "=" + (a + b) + "<br/>");
}
add(1,2);
var xinxin = {};
xinxin.name = 'xinxin';
add.apply(xinxin, [3, 4]);
add.call(xinxin, 3, 4);