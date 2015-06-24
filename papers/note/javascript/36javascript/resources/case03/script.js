var arr = [];
arr.push(1);
arr.push(2);
arr.push(3);
for(var i in arr) {
	document.write(arr[i]);
}
document.write("<br/>");
var a = arr.pop();
document.write(a + "<br/>");
for(var i in arr) {
	document.write(arr[i]);
}