<?php

require_once dirname ( __FILE__ ) . '/../../service/noteService.class.php';

session_start();
if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
	echo "";
} else {
	
	if(!isset($_POST['curPage'])) {
		$curPage = 1;
	} else {
		$curPage = $_POST['curPage'];
	}
	
	$noteService = new NoteService();
	$res = array();
	$res['totalPage'] = $noteService->getNoteListPageNum();
	$res['curPage'] = $curPage;
	
	$noteList = $noteService->getNoteByPage($curPage);
	$res['noteList'] = $noteList;
	
	echo json_encode($res);
	
}

?>
