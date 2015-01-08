<?php 
	include_once 'partials/header.php';
?>
<div class="notedetail_div">
	<div class="left_div">
		<ul>
			<li class="title1"><a href="#">HTML初级知识</a></li>
			<li class="title2"><a href="#">标签</a></li>
			<li class="title2"><a href="#">标签</a></li>
			<li class="title3"><a href="#">table标签</a></li>
			<li class="title3"><a href="#">a标签</a></li>
			<li class="title1"><a href="#">1111</a></li>
			<li class="title1"><a href="#">1111</a></li>
			<li class="title1"><a href="#">1111</a></li>
		</ul>
	</div>
	<div class="right_div">
		<div class="count_div">1000次阅读</div>
		<div class="title">HTML初级知识</div>
		<div class="content_div">
<?php 
	include_once 'papers/note/html/01html/paper.php';
?>
		</div>
<?php 
	include_once 'partials/payDiv.php';
?>
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