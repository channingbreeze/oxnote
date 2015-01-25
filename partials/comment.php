<?php 
	
require_once dirname ( __FILE__ ) . '/../service/commentService.class.php';

?>
<div class="comment">
	<ul class="commentUL" id="comments">
		
	</ul>
	<div id="commentsPagination"></div>
<?php 
	if( !isset($_SESSION) ) {
		session_start();
	}
	if(!isset($_SESSION['user'])) {
?>
	<div class="loginToComment">
		<div class="info">评论请先<a id="loginComment" href="#">登录</a></div>
	</div>
<?php 
	} else {
?>
	<div class="userComment">
		<div class="replyInfo" style="display : none;"><a name="reply"></a><div class="replyBox"><span>回复&nbsp;<div style="display : inline;" id="layerNum">1</div>F：</span><a id="closeReply" href="#">X</a></div></div>
		<textarea id="userInputComment"></textarea>
		<button id="sendComment">发表评论</button>
	</div>
<?php 
	}
?>
</div>