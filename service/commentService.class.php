<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';

class CommentService {

	private $commentPerPage = 10;
	
	// 根据type和id得到comment组件需要的数据
	public function getCommentDataByTypeAndId($type, $id, $curPage) {
		
		$sql = "select u.username as username, u.head_url as head_url, c.gmt_create as gmt_create, c.content as content, c.reply as reply, c.id as id from oxn_comment c, oxn_user u where c.paper_type='" . $type . "' and c.paper_id=" . $id . " and c.user_id = u.id order by gmt_create asc limit " . ($curPage - 1) * $this->commentPerPage . "," . $this->commentPerPage;
	
		$sqlHelper = new SQLHelper();
		
		$res = $sqlHelper->execute_dql_array($sql);
		
		for($i=0; $i < count($res); $i++) {
			// 更新评论回复中的头像，如果有更新的话
			$reply = json_decode($res[$i]['reply'], true);
			$refresh = false;
			for($j=0 ;$j < count($reply); $j++) {
				if(!isset($reply[$j]['head_url']) && file_exists(dirname ( __FILE__ ) . '/../images/userhead/' . $reply[$j]['username'] . '.jpg')) {
					$reply[$j]['head_url'] = 'images/userhead/' . $reply[$j]['username'] . '.jpg';
					$refresh = true;
				}
			}
			if($refresh) {
				$sql = "update oxn_comment set reply='" . json_encode($reply) . "' where id=" . $res[$i]['id'];
				$res[$i]['reply'] = json_encode($reply);
			}
			$res[$i]['layer'] = ($curPage - 1) * $this->commentPerPage + 1 + $i;
		}
		
		return $res;
		
	}
	
	// 添加评论
	public function addComment($userId, $content, $replyNum, $type, $paperId) {
		
		// 添加评论
		if($replyNum == 0) {
			
			$sql = "insert into oxn_comment (user_id, gmt_create, paper_type, paper_id, content, reply) values (" . $userId . ", now(), '" . $type . "', " . $paperId . ", '" . $content . "', '')";
		
			$sqlHelper = new SQLHelper();
			
			$res = $sqlHelper->execute_dqm($sql);
		
		// 回复
		} else {
		
			date_default_timezone_set('PRC');
			
			$sql = "select * from oxn_comment where id=" . $replyNum;
			
			$sqlHelper = new SQLHelper();
			
			$arr = $sqlHelper->execute_dql_array($sql);
			
			$reply = json_decode($arr[0]['reply']);

			$item = array();
			
			$sql = "select * from oxn_user where id=" . $userId;
			$user = $sqlHelper->execute_dql_array($sql);
			
			$item['gmt_create'] = date("Y-n-d G:i:s", time());
			$item['head_url'] = $user[0]['head_url'];
			$item['username'] = $user[0]['username'];
			$item['user_id'] = $userId;
			$item['replyId'] = count($reply);
			$item['content'] = $content;
			$reply[count($reply)] = $item;
			$reply = json_encode($reply, JSON_UNESCAPED_UNICODE);
			
			$sql = "update oxn_comment set reply='" . $reply . "' where id=" . $replyNum;
			
			$res = $sqlHelper->execute_dqm($sql);
			
		}
		
		if($res == 1) {
			return true;
		} else {
			return false;
		}
		
	}
	
	// 得到总页数
	public function getCommentPagesByTypeAndId($type, $id) {
		
		$sql = "select count(id) as count from oxn_comment where paper_type='" . $type . "' and paper_id=" . $id;
		
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dql_array($sql);
		
		$totalPage = ceil($res[0]['count'] / $this->commentPerPage);
		
		return $totalPage;
		
	}
	
}

?>
