<?php 
	include_once 'partials/header.php';
?>
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