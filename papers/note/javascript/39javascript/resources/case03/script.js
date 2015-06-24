document.getElementById("btn").onclick = function() {
	var str = document.getElementById("str").value;
	var reg = /^(\w)(\w)(\w)(\w)\3\2\1$/gi;
	if(reg.test(str)) {
		alert("yes");
	} else {
		alert("no");
	}
}
document.getElementById("capture").onclick = function() {
	var str = document.getElementById("str").value;
	var reg = /^(\w)(\w)(\w)(\w)\3\2\1$/gi;
	var res = reg.exec(str);
	document.getElementById('res').innerHTML = JSON.stringify(res);
}
