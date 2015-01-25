<?php 
	include_once 'partials/header.php';
?>
<?php 
	require_once dirname ( __FILE__ ) . '/service/studyService.class.php';
	
	$id = 1;
	
	if(isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	$studyService = new StudyService();
	$studyService->addVisitedCountById($id);
	$study = $studyService->getStudyById($id);
	
	$count = $studyService->getCount();
	
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