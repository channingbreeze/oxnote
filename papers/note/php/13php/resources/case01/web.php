<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>ajax实现局部更新</title>
</head>
<body>
	<button id="btn">点我吧</button>
	<div id="num"></div>
	<script>
		var xhr = null;
		var refresh = function() {
			xhr = new XMLHttpRequest();
			xhr.open("GET", "data.php", true);
			xhr.onreadystatechange = callback;
			xhr.send(null);
		}
		var callback = function() {
			if (xhr.readyState == 4) {
				if (xhr.status == 200) {
					alert(xhr.responseText);
					document.getElementById("num").innerText = xhr.responseText;
				}
			}
		}
		document.getElementById("btn").onclick = function() {
			refresh();
		}
		refresh();
	</script>
</body>