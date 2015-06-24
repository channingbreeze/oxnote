document.getElementById("btn").onclick = function() {
	var str = document.getElementById("str").value;
	var reg = /^(\d){11}$/gi;
	if(reg.test(str)) {
		alert("yes");
	} else {
		alert("no");
	}
}