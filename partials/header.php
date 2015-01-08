<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>玩命牛的成长记录</title>
	<link href="css/oxnote.css" rel="stylesheet">
	<script src="js/seajs/sea.js"></script>
	<script src="js/config.js"></script>
</head>
<body>
	<div class="menu_div">
		<div class="inner_menu_div">
			<div class="menu_title">玩命牛的成长记录</div>
			<ul>
				<li><a href="index.php">首页</a></li>
				<li><a href="study.php">学习</a></li>
				<li><a href="note.php">笔记</a></li>
				<li><a href="about.php">关于</a></li>
				<li><a href="hire.php">招聘</a></li>
			</ul>
<?php 
	session_start();
	if(!isset($_SESSION['user'])) {
?>
			<a href="#" id="login">登陆</a>
<?php 
	} else {
?>
			<a href="#" id="userInfo"><?php echo $_SESSION['user']['username']; ?></a>
<?php 
	}
?>
		</div>
	</div>
	<div class="middle_div">