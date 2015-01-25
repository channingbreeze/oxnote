<?php 
	include_once 'partials/header.php';
?>
<div class="note_div">
	<div class="skills_div block_div">
	<span class="title_span">技术积累</span>
	<hr />
	<ul>
		<li>
			<img src="images/html.jpg" />
			<div class="type_title">超文本标记语言</div>
			<div class="type_info">超文本标记语言（HTML）是网页设计的基础，网页的元素都是由HTML标记组成，故HTML技术是网页设计中不可或缺的技术</div>
			<a class="type_button" href="notedetail.php?category=html">阅读笔记</a>
		</li>
	</ul>
	</div>
</div>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/note");
    </script>
</body>