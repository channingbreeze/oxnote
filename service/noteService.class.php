<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class NoteService {

	private $notePerPage = 10;
	
	// 返回最新5条记录
	public function getTop5() {

		$sql = "select * from oxn_note order by gmt_create desc limit 0,5";

		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);

		return $res;

	}
	
	// 获取笔记Page数
	public function getNoteListPageNum() {
	
		$sql = "select count(id) as count from oxn_note";
	
		$sqlHelper = new SQLHelper();
	
		$arr = $sqlHelper->execute_dql_array($sql);
	
		$totalNoteCount = $arr[0]['count'];
	
		$totalPage = ceil($totalNoteCount / $this->notePerPage);
	
		return $totalPage;
	
	}
	
	// 获取一页笔记
	public function getNoteByPage($curPage) {
	
		$sql = "select * from oxn_note limit " . ($curPage - 1) * $this->notePerPage . "," . $this->notePerPage;
	
		$sqlHelper = new SQLHelper();
	
		$res = $sqlHelper->execute_dql_array($sql);
	
		return $res;
	
	}
	
	// 插入一条note记录
	public function addNote($category, $ord, $pri, $title, $subTitle, $docDir) {
		
		$sql = "insert into oxn_note (category, gmt_create, ord, pri, title, sub_title, doc_dir, visited_count) values ('" . $category . "', now(), " . $ord . ", " . $pri . ", '" . $title . "', '" . $subTitle . "', '" . $docDir . "', 0)";
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	// 根据id选择note
	public function getNoteById($id) {
	
		$sql = "select * from oxn_note where id=" . $id;
	
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
	
		return $res;
	
	}
	
	// 得到总数
	public function getCount() {
	
		$sql = "select count(id) as count from oxn_note";
		
		$sqlHelper = new SQLHelper();
		
		$arr = $sqlHelper->execute_dql_array($sql);
		
		$totalNoteCount = $arr[0]['count'];
		
		return $totalNoteCount;
		
	}
	
	// 增加一个访问次数
	public function addVisitedCountById($id) {
		
		$sql = "update oxn_note set visited_count=visited_count+1 where id=" . $id;
		
		$sqlHelper = new SQLHelper();
		
		$sqlHelper->execute_dqm($sql);
		
	}
	
	// 获取左边栏
	public function getLeftBar($category) {
		
		$sql = "select * from oxn_note where category='" . $category . "' order by ord";
		
		$sqlHelper = new SQLHelper();
		
		$arr = $sqlHelper->execute_dql_array($sql);
		
		return $arr;
		
	}
	
	// 更新note
	public function updateNote($id, $category, $ord, $pri, $title, $subTitle, $docDir) {
		
		$sql = "update oxn_note set category='" . $category . "', ord=" . $ord . ", pri=" . $pri . ", title='" . $title . "', sub_title='" . $subTitle . "', doc_dir='" . $docDir . "' where id=" . $id;
		
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
