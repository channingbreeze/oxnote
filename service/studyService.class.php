<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class StudyService {
	
	// 返回最新5条记录
	public function getTop5() {
		
		$sql = "select * from oxn_study order by gmt_create desc limit 0,5";
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		
		return $res;
		
	}
	
}

?>
