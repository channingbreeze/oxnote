<?php

require_once dirname ( __FILE__ ) . '/../../service/studyService.class.php';

session_start();
if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
	echo "";
} else {

	if(!isset($_POST['id']) ||
		!isset($_POST['tag']) || empty($_POST['tag']) ||
		!isset($_POST['title']) || empty($_POST['title']) ||
		!isset($_POST['sub_title']) || empty($_POST['sub_title']) ||
		!isset($_POST['doc_dir']) || empty($_POST['doc_dir']) ) {

		echo "false";

	} else {

		$id = $_POST['id'];
		$tag = $_POST['tag'];
		$title = $_POST['title'];
		$subTitle = $_POST['sub_title'];
		$docDir = $_POST['doc_dir'];

		$studyService = new StudyService();
		$res = $studyService->updateStudyById($id, $tag, $title, $subTitle, $docDir);

		if($res) {
			echo "true";
		} else {
			echo "false";
		}

	}

}

?>
