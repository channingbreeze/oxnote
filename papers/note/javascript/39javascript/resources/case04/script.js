/* (T|t)其实不需要被捕获
document.getElementById("btn").onclick = function() {
	var str = document.getElementById("str").value;
	var reg = /^(T|t)he(\d)\2\2\2$/gi;
	var res = reg.exec(str);
	if(res) {
		alert(res[2]);
	} else {
		alert("no");
	}
}
*/
document.getElementById("btn").onclick = function() {
	var str = document.getElementById("str").value;
	var reg = /^(T|t?:)he(\d)\2\2\2$/gi;
	var res = reg.exec(str);
	console.log(res);
	if(res) {
		alert(res[1]);
	} else {
		alert("no");
	}
}