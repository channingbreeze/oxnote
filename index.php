<?php 
	include_once 'partials/header.php';
?>
<div class="index_div">
<div class="person_div">
	<span class="title_span">人物介绍</span>
	<hr/>
	<div class="one_person_div">
		<div class="person_name">欣欣（1989—）</div>
		<div class="person_info">自动化专业研究生，转行当程序员，在一家国内领先的IT公司工作，业余时间兼职创业，创办网站<a href="http://www.xinxinweb.xyz" target="blank">欣欣网站制作</a>。</div>
	</div>
	<div class="one_person_div">
		<div class="person_name">玩命牛（1989—）</div>
		<div class="person_info">欣欣的本科同学，学习非常玩命，本科毕业后去了一家小公司，干得并不称心，正准备转行IT，听说本科同学欣欣正在兼职互联网创业，特邀他一起合租，同时加入了兼职创业的队伍。</div>
	</div>
</div>
<div>
	<div class="half_div">
		<div class="new_study inner_half_div">
			<span class="title_span">最新学习</span>
			<hr/>
			<ul id="study_content">
			</ul>
			<div class="half_button"><a href="study.php">开始学习</a></div>
		</div>
	</div>
	<div class="half_div">
		<div class="new_study inner_half_div">
			<span class="title_span">最新笔记</span>
			<hr/>
			<ul id="note_content">
			</ul>
			<div class="half_button"><a href="note.php">复习笔记</a></div>
		</div>
	</div>
</div>
</div>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/index");
    </script>
</body>