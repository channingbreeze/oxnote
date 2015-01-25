<?php

require_once dirname ( __FILE__ ) . '/../../service/userService.class.php';

session_start();
if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
	echo "";
} else {
	
	if(!isset($_POST['curPage'])) {
		$curPage = 1;
	} else {
		$curPage = $_POST['curPage'];
	}
	
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	} else {
		$username = "";
	}
	
	$userService = new UserService();
	$res = array();
	$res['totalPage'] = $userService->getUserListPageNum($username);
	$res['curPage'] = $curPage;
	
	$userList = $userService->getUserByPage($curPage, $username);
	$res['userList'] = $userList;
	
	echo json_encode($res);
	
}

?>
