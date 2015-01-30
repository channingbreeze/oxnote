<?php 
	require_once dirname ( __FILE__ ) . '/service/studyService.class.php';
	
	$id = 1;
	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	
	$studyService = new StudyService();
	$studyService->addVisitedCountById($id);
	$study = $studyService->getStudyById($id);
	
	$count = $studyService->getCount();
	
?>
<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>玩命牛的成长记录-<?php echo $study[0]['title'];?></title>
	<meta name="Keywords" content="<?php echo $study[0]['title'];?>，<?php echo $study[0]['sub_title'];?>，互联网教程，互联网精品教程，教程，互联网，玩命牛，成长记录" />
	<meta name="Description" content="玩命牛的成长记录是一个为小白提供的互联网情景教程，由牛人带领小白一步一步成为高手" />
<?php 
	include_once 'partials/header.php';
?>
<div class="conversation_div">
	<div class="viewcount_div"><?php echo $study[0]['visited_count'];?>次阅读</div>
	<div class="prev_next_div">
		<?php if($id > 1) {?><a href="conversation.php?id=<?php echo $id-1;?>">上一篇</a><?php }?>
		<?php if($id < $count) {?><a href="conversation.php?id=<?php echo $id+1;?>">下一篇</a><?php }?>
	</div>
	<hr/>
	<div class="title_div"><?php echo $study[0]['title'];?></div>
	<div class="sub_title_div"><?php echo $study[0]['sub_title'];?></div>
	<div class="article">
<?php 
	include_once $study[0]['doc_dir'];
?>
	</div>
	<div class="title_div">&nbsp;</div>
	<hr/>
	<div class="prev_next_div">
		<?php if($id > 1) {?><a href="conversation.php?id=<?php echo $id-1;?>">上一篇</a><?php }?>
		<?php if($id < $count) {?><a href="conversation.php?id=<?php echo $id+1;?>">下一篇</a><?php }?>
	</div>
</div>
<?php 
	include_once 'partials/payDiv.php';
?>
<?php 
	$commentType = 'study';
?>
	<script>
		var commentType = '<?php echo $commentType;?>';
		var ID = <?php echo $id;?>;
	</script>
<?php 
	include_once 'partials/comment.php';
?>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/conversation");
    </script>
</body>