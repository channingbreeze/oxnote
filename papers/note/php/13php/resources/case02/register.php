<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>ajax实现局部更新</title>
	<style>
		.info {
			color : red;	
		}
	</style>
</head>
<body>
	<form action="handler.php" method="post">
		<input type="text" name="username" id="username" placeholder="请输入用户名" />
		<span id="info" class="info"></span><br/>
		<input type="password" name="password" placeholder="请输入密码" /><br/>
		<input type="hidden" name="type" value="register" /><br/>
		<input type="submit" value="注册" onclick="return false;" /><br/>
	</form>
	有账号？直接<a href="login.php">登陆</a>
	<script>
	var xhr = null;
	var check = function() {
		xhr = new XMLHttpRequest();
		xhr.open("POST", "checkuser.php", true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.onreadystatechange = callback;
		xhr.send("username=" + document.getElementById("username").value);
	}
	var callback = function() {
		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				if(xhr.responseText == "true") {
					document.getElementById("info").innerText = "";
				} else {
					document.getElementById("info").innerText = "用户名已存在";
				}
			}
		}
	}
	document.getElementById("username").onblur = check;
	</script>
</body>