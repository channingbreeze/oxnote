<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class StudyService {
	
	private $studyPerPage = 10;
	
	// 返回最新5条记录
	public function getTop5() {
		
		$sql = "select * from oxn_study order by gmt_create desc limit 0,5";
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		
		return $res;
		
	}
	
	// 获取学习Page数
	public function getStudyListPageNum() {
		
		$sql = "select count(id) as count from oxn_study";
	
		$sqlHelper = new SQLHelper();
	
		$arr = $sqlHelper->execute_dql_array($sql);
	
		$totalStudyCount = $arr[0]['count'];
	
		$totalPage = ceil($totalStudyCount / $this->studyPerPage);
	
		return $totalPage;
	
	}
	
	// 获取一页学习
	public function getStudyByPage($curPage) {
	
		$sql = "select * from oxn_study limit " . ($curPage - 1) * $this->studyPerPage . "," . $this->studyPerPage;
		
		$sqlHelper = new SQLHelper();
	
		$res = $sqlHelper->execute_dql_array($sql);
	
		return $res;
	
	}
	
	// 插入一条study记录
	public function addStudy($tag, $title, $subTitle, $docDir) {
	
		$sql = "insert into oxn_study (tag, gmt_create, title, sub_title, doc_dir, visited_count) values ('" . $tag . "', now(), '" . $title . "', '" . $subTitle . "', '" . $docDir . "', 0)";
	
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
	
		if($res == 1) {
			return true;
		} else {
			return false;
		}
	
	}
	
	// 根据id选择study
	public function getStudyById($id) {
		
		$sql = "select * from oxn_study where id=" . $id;
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		
		return $res;
		
	}
	
	// 得到总数
	public function getCount() {
		
		$sql = "select count(id) as count from oxn_study";
		
		$sqlHelper = new SQLHelper();
		
		$arr = $sqlHelper->execute_dql_array($sql);
		
		$totalStudyCount = $arr[0]['count'];
		
		return $totalStudyCount;
		
	}
	
	// 增加一个访问次数
	public function addVisitedCountById($id) {
	
		$sql = "update oxn_study set visited_count=visited_count+1 where id=" . $id;
	
		$sqlHelper = new SQLHelper();
	
		$sqlHelper->execute_dqm($sql);
	
	}
	
	// 更新study
	public function updateStudyById($id, $tag, $title, $subTitle, $docDir) {
		
		$sql = "update oxn_study set tag='" . $tag . "', title='" . $title . "', sub_title='" . $subTitle . "', doc_dir='" . $docDir . "' where id=" . $id;
		
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
