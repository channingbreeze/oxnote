<?php

require_once dirname ( __FILE__ ) . '/../../service/commentService.class.php';

session_start();
if(!isset($_SESSION['user'])) {
	echo "false";
} else {

	if(isset($_POST['content']) && !empty($_POST['content']) &&
		isset($_POST['replyNum']) &&
		isset($_POST['type']) && !empty($_POST['type']) &&
		isset($_POST['paperId']) && $_POST['paperId'] != 0) {
		
		$content = nl2br($_POST['content']);
		$replyNum = $_POST['replyNum'];
		$type = $_POST['type'];
		$paperId = $_POST['paperId'];
		
		$commentService = new CommentService();
		$res = $commentService->addComment($_SESSION['user']['userid'], $content, $replyNum, $type, $paperId);
		if($res) {
			echo "true";
		} else {
			echo "false";
		}
		
	} else {
		echo "false";
	}
	
}

?>
