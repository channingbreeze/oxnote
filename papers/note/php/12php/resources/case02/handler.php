<?php
	require_once dirname ( __FILE__ ) . '/../../../../common/SQLHelper.class.php';
	if(isset($_POST['type'])) {
		$type = $_POST['type'];
		if(isset($_POST['username']) && isset($_POST['password'])) {
			$sqlHelper = new SQLHelper();
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($type == "login") {
				$sql = "select * from test where username='". $username . "'";
				$res = $sqlHelper->execute_dql_array($sql);
				if(count($res) > 0) {
					if($res[0]['passwd'] == $password) {
						// 密码验证通过
						session_start();
						$_SESSION['username'] = $username;
						header("Location: welcome.php");
					} else {
						header("Location: login.php");
					}
				} else {
					header("Location: login.php");
				}
			} else if($type == "register") {
				$sql = "select * from test where username='". $username . "'";
				$res = $sqlHelper->execute_dql_array($sql);
				var_dump($res);
				if(count($res) > 0) {
					//用户名已存在
					header("Location: login.php");
					exit();
				}
				$sql = "insert into test (username, passwd) values ('" . $username . "', '" . $password . "')";
				$res = $sqlHelper->execute_dqm($sql);
				if($res == 1) {
					session_start();
					$_SESSION['username'] = $username;
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