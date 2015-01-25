<?php

require_once dirname ( __FILE__ ) . '/../../service/userService.class.php';

session_start();
if(isset($_SESSION['user'])) {
	if(isset($_POST['imgName'])) {
		
		$src = dirname ( __FILE__ ) . "/../../images/preheader/" . $_POST['imgName'] . ".jpg";
		$dst = dirname ( __FILE__ ) . "/../../images/userhead/" . $_SESSION['user']['username'] . '.jpg';
		$res = copy($src, $dst);
		if($res) {
			$userService = new UserService();
			$url = "images/userhead/" . $_SESSION['user']['username'] . ".jpg";
			$res = $userService->setUserHeadUrlById($url, $_SESSION['user']['userid']);
			if($res) {
				echo "true";
			} else {
				echo "false";
			}
		} else {
			echo "false";
		}
		
	} else {
		echo "false";
	}
} else {
	echo "false";
}

?>
