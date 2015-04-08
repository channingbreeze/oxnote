<?php
	require_once dirname ( __FILE__ ) . '/../../../../common/SQLHelper.class.php';
	if(isset($_POST['type'])) {
		$type = $_POST['type'];
		if(isset($_POST['username']) && isset($_POST['password'])) {
			$sqlHelper = new SQLHelper();
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($type == "login") {
				$sql = "select * from test where username='". $username ."' and passwd='". $password ."'";
				$res = $sqlHelper->execute_dql_array($sql);
				if(count($res) > 0) {
					header("Location: welcome.php");
				} else {
					header("Location: login.php");
				}
			} else if($type == "register") {
				$sql = "insert into test (username, passwd) values ('" . $username . "', '" . $password . "')";
				$res = $sqlHelper->execute_dqm($sql);
				if($res == 1) {
					header("Location: welcome.php");
				} else {
					header("Location: login.php");
				}
			}
		} else {
			header("Location: login.php");
		}
	} else {
		header("Location: login.php");
	}
?>