	<link href="css/oxnote.css" rel="stylesheet">
	<script src="js/seajs/sea.js"></script>
	<script src="js/config.js"></script>
</head>
<body>
	<div class="menu_div">
		<div class="inner_menu_div">
			<div class="menu_title">玩命牛的成长记录</div>
			<ul>
				<li><a href="index.html">首页</a></li>
				<li><a href="study.html">学习</a></li>
				<li><a href="note.html">笔记</a></li>
				<li><a href="about.html">关于</a></li>
			</ul>
<?php 
	if( !isset($_SESSION) ) {
		session_start();
	}
	if(!isset($_SESSION['user'])) {
?>
			<a href="#" id="login">登陆</a>
<?php 
	} else {
?>
			<div class="userInfo">
				<a href="personal.html" id="userInfo"><?php echo $_SESSION['user']['username']; ?></a>
				<ul>
					<?php 
						if($_SESSION['user']['is_admin']) {
					?>
					<li><a href="admin.html">管理后台&nbsp;</a></li>
					<?php
						} 
					?>
					<li><a href="#" id="logout">退出&nbsp;</a></li>
				</ul>
			</div>
<?php 
	}
?>
		</div>
	</div>
	<div class="middle_div">