<?php 

	require_once dirname ( __FILE__ ) . '/service/noteService.class.php';
	
	$category = 'html';
	$id = 1;
	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	
	if(isset($_GET['category'])) {
		$category = $_GET['category'];
	}
	
	$noteService = new NoteService();
	$noteService->addVisitedCountById($id);
	$note = $noteService->getNoteById($id);
	
	$notes = $noteService->getLeftBar($category);

?>
<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title><?php echo $note[0]['title'];?>|玩命牛的成长记录|互联网教程|互联网|精品教程|玩命牛|成长记录</title>
	<meta name="Keywords" content="<?php echo $note[0]['title'];?>，<?php echo $note[0]['sub_title'];?>，互联网教程，互联网精品教程，教程，互联网，玩命牛，成长记录" />
	<meta name="Description" content="玩命牛的成长记录是一个为小白提供的互联网情景教程，由牛人带领小白一步一步成为高手" />
<?php 
	include_once 'partials/header.php';
?>
<div class="notedetail_div">
	<div class="left_div">
		<ul>
<?php 
			foreach($notes as $n) {
?>
			<li class="title<?php echo $n['pri'];?>"><a href="notedetail.php?category=html&id=<?php echo $n['id'];?>"><?php echo $n['title'];?></a></li>
<?php 
			}
?>
		</ul>
	</div>
	<div class="right_div">
		<div class="count_div"><?php echo $note[0]['visited_count'];?>次阅读</div>
		<div class="title"><?php echo $note[0]['title'];?></div>
		<div class="content_div">
<?php 
	include_once $note[0]['doc_dir'];
?>
		</div>
<?php 
	include_once 'partials/payDiv.php';
?>
<?php 
	$commentType = 'note';
?>
	<script>
		var commentType = '<?php echo $commentType;?>';
		var ID = <?php echo $id;?>;
	</script>
<?php 
	include_once 'partials/comment.php';
?>
	</div>
</div>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/notedetail");
    </script>
</body>