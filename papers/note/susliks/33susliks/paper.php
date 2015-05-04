<p>我们来想一想这里面有哪些东西需要动呢？</p>
<p>首先给进度条和积分框来一个渐变，这样他们的入场就不会这么生硬了。</p>
<p>然后是进度条的计时功能，一个颜色的渐变和一个宽度的渐变，这都可以通过animation来实现，这里是通过progress这个keyframes来定义的。在animation里面有一个forwards，这个表示动画完成后停留在最后一帧。</p>
<p>然后就是地鼠们的动画啦，我们可以让我们的地鼠们一直动，反正不到第二场景也看不到，所以我们在地鼠上设置animation-iteration-count: infinite;。我们要为不同的地鼠做不同的动画，所以6个地鼠就要来六个动画，但是其实都是一个原理。</p>
<p>最后给大家看看最终代码和效果：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/33susliks/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/33susliks/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/33susliks/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>