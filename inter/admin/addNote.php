<?php

require_once dirname ( __FILE__ ) . '/../../service/noteService.class.php';

session_start();
if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
	echo "";
} else {
	
	if(!isset($_POST['category']) || empty($_POST['category']) ||
		!isset($_POST['ord']) || $_POST['ord'] < 0 ||
		!isset($_POST['pri']) || $_POST['pri'] <= 0 ||
		!isset($_POST['title']) || empty($_POST['title']) ||
		!isset($_POST['sub_title']) || empty($_POST['sub_title']) ||
		!isset($_POST['doc_dir']) || empty($_POST['doc_dir']) ) {
	
		echo "false";
	
	} else {
		
		$category = $_POST['category'];
		$ord = $_POST['ord'];
		$pri = $_POST['pri'];
		$title = $_POST['title'];
		$subTitle = $_POST['sub_title'];
		$docDir = $_POST['doc_dir'];
		
		$noteService = new NoteService();
		$res = $noteService->addNote($category, $ord, $pri, $title, $subTitle, $docDir);
		
		if($res) {
			echo "true";
		} else {
			echo "false";
		}
		
	}
	
}

?>
