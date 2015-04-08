<?php

require_once dirname ( __FILE__ ) . '/../../service/userService.class.php';

session_start();
if(!isset($_SESSION['user']) || !$_SESSION['user']['is_admin']) {
	echo "";
} else {
	
	if(!isset($_POST['id']) ||
		!isset($_POST['target'])) {
	
		echo "false";
	
	} else {
		
		$id = $_POST['id'];
		$target = $_POST['target'];
		$userService = new UserService();
		$res = $userService->setAdmin($target, $id);
		if($res) {
			echo "true";
		} else {
			echo "false";
		}
		
	}
	
}

?>
