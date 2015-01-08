<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class UserService {
	
	// 用户登录验证
	public function login($username, $password) {
	
		$sql = "select * from oxn_user where username='" . $username . "'";
	
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		if(count($res) == 0) {
			return false;
		}
		if(md5($password) == $res[0]['passwd']) {
	
			$arr = array();
			$arr['username'] = $res[0]['username'];
			$arr['userid'] = $res[0]['id'];
			$arr['is_admin'] = $res[0]['is_admin'];
				
			// 存Session
			session_start();
	
			$_SESSION['user'] = $arr;
	
			return true;
	
		} else {
			return false;
		}
	
	}
	
	// 用户注册
	public function register($username, $password) {
	
		$sql = "select * from oxn_user where username='" . $username . "'";
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		if(count($res) > 0) {
			return false;
		}
		
		$sql = "insert into oxn_user (username, passwd) values ('" . $username . "', md5('" . $password . "'))";

		$res = $sqlHelper->execute_dqm($sql);
	
		if($res == 1) {
				
			$arr = array();
			$arr['username'] = $username;
			$arr['userid'] = $sqlHelper->getLastInsertedId();
			$arr['is_admin'] = 0;
				
			// 存Session
			session_start();
				
			$_SESSION['user'] = $arr;
	
			return true;
				
		} else {
			return false;
		}
	}
	
}

?>
