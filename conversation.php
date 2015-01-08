<?php 
	include_once 'partials/header.php';
?>
<div class="conversation_div">
	<div class="viewcount_div">1000次阅读</div>
	<div class="prev_next_div">
		<a href="#">上一篇</a>
		<a href="#">下一篇</a>
	</div>
	<hr/>
	<div class="title_div">初见</div>
	<div class="sub_title_div">“初次见面，请多关照”，玩命牛对互联网说到。</div>
	<div class="article">
<?php 
	include_once 'papers/study/day1.php';
?>
	</div>
	<div class="title_div">&nbsp;</div>
	<hr/>
	<div class="prev_next_div">
		<a href="#">上一篇</a>
		<a href="#">下一篇</a>
	</div>
</div>
<?php 
	include_once 'partials/payDiv.php';
?>
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