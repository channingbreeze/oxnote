<?php

require_once dirname ( __FILE__ ) . '/../service/studyService.class.php';
require_once dirname ( __FILE__ ) . '/../service/noteService.class.php';

$studyService = new StudyService();
$noteService = new NoteService();

$res = array();
$res['study'] = $studyService->getTop5();
$res['note'] = $noteService->getTop5();

echo json_encode($res);
