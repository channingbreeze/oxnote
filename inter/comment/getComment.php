<?php

require_once dirname ( __FILE__ ) . '/../../service/commentService.class.php';

if(!isset($_POST['type']) || empty($_POST['type'])
	|| !isset($_POST['id']) || empty($_POST['id']) ) {
	echo "false";
} else {

	$commentType = $_POST['type'];
	$id = $_POST['id'];
	
	$curPage = 1;
	if(isset($_POST['curPage'])) {
		$curPage = $_POST['curPage'];
	}
	
	$commentService = new CommentService();
	$comments = $commentService->getCommentDataByTypeAndId($commentType, $id, $curPage);
	
	session_start();
	if(isset($_SESSION['user'])) {
		for($i=0; $i < count($comments); $i++) {
			$comments[$i]['isLogin'] = 'true';
		}
	}
	
	$res = array();
	$res['totalPage'] = $commentService->getCommentPagesByTypeAndId($commentType, $id);
	$res['curPage'] = $curPage;
	$res['comment'] = $comments;
	
	echo json_encode($res);
	
}

?>
