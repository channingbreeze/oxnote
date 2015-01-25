<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class UserService {
	
	private $userPerPage = 10;
	
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
	
	// 获取用户Page数
	public function getUserListPageNum($username="") {
	
		$username = trim($username);
		
		if(empty($username)) {
			$sql = "select count(id) as count from oxn_user";
		} else {
			$sql = "select count(id) as count from oxn_user where username like '%" . $username . "%'";
		}
		
		$sqlHelper = new SQLHelper();
	
		$arr = $sqlHelper->execute_dql_array($sql);
	
		$totalUserCount = $arr[0]['count'];
		
		$totalPage = ceil($totalUserCount / $this->userPerPage);
		
		return $totalPage;
	
	}
	
	// 获取一页用户
	public function getUserByPage($curPage, $username="") {
	
		$username = trim($username);
		
		if(empty($username)) {
			$sql = "select * from oxn_user limit " . ($curPage - 1) * $this->userPerPage . "," . $this->userPerPage;
		} else {
			$sql = "select * from oxn_user where username like '%" . $username . "%'" . " limit " . ($curPage - 1) * $this->userPerPage . "," . $this->userPerPage;
		}
		
		$sqlHelper = new SQLHelper();
	
		$res = $sqlHelper->execute_dql_array($sql);
	
		return $res;
	
	}
	
	// 根据ID拿到用户
	public function getUserById($id) {
		
		$sql = "select * from oxn_user where id=" . $id;
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		
		return $res;
		
	}
	
	// 设置用户头像
	public function setUserHeadUrlById($userhead, $id) {
		
		$sql = "update oxn_user set head_url='" . $userhead . "' where id=" . $id;
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		
		if($res == 0) {
			return false;
		} else {
			return true;
		}
		
	}
	
	// 设置或取消管理员
	public function setAdmin($target, $id) {
		
		$sql = "update oxn_user set is_admin=" . $target . " where id=" . $id;

		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 0) {
			return false;
		} else {
			return true;
		}
		
	}
	
}

?>
