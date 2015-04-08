<?php

require_once dirname ( __FILE__ ) . '/../../service/studyService.class.php';

if(!isset($_POST['curPage'])) {
	$curPage = 1;
} else {
	$curPage = $_POST['curPage'];
}

$studyService = new StudyService();
$res = array();
$res['totalPage'] = $studyService->getStudyListPageNum();
$res['curPage'] = $curPage;

$studyList = $studyService->getStudyByPage($curPage);
$res['studyList'] = $studyList;

echo json_encode($res);

?>
