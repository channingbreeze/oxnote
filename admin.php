<?php 
	if( !isset($_SESSION) ) {
		session_start();
	}
	if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>玩命牛的成长记录</title>
	<meta name="Keywords" content="互联网教程，互联网精品教程，教程，互联网，玩命牛，成长记录" />
	<meta name="Description" content="玩命牛的成长记录是一个为小白提供的互联网情景教程，由牛人带领小白一步一步成为高手" />
<?php 
	include_once 'partials/header.php';
?>
<div class="admin_div">
	<div class="nav">
		<ul>
			<li><button id="userManage">用户管理</button></li>
			<li><button id="studyManage">学习管理</button></li>
			<li><button id="noteManage">笔记管理</button></li>
		</ul>
	</div>
	<div style="clear : both;"></div>
	<div class="manage userManage" id="userManageDiv">
		<div class="topCheckDiv">
			<input type="text" id="userNameQuery" placeholder="请输入要查询的用户名，支持模糊查询" />
			<button id="userQueryBtn">查询</button>
		</div>
		<div id="userTable">
		
		</div>
		<div style="display : inline-block;" id="userPagination"></div>
	</div>
	<div class="manage studyManage" id="studyManageDiv">
		<div class="topCheckDiv">
			<button id="addStudy">新增</button>
		</div>
		<div id="studyTable">
		
		</div>
		<div style="display : inline-block;" id="studyPagination"></div>
	</div>
	<div class="manage noteManage" id="noteManageDiv">
		<div class="topCheckDiv">
			<button id="addNote">新增</button>
		</div>
		<div id="noteTable">
		
		</div>
		<div style="display : inline-block;" id="notePagination"></div>
	</div>
</div>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/admin");
    </script>
</body>