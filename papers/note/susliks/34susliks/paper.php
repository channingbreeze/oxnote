<p>就按照和欣欣讨论的思路，先写个原理验证的例子来看看：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/34susliks/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们先随便放两个label，让它们指向两个radio。然后我们让.container的overflow为hidden，用points来卡住位置，下面div中的point刚刚好0在.container的位置。当我们点击label的时候，会有一个radio变为checked，然后我们让它后面的block的height变为0，这样，下一个分数就上来了。这样就简单实现了计分功能。</p>
<p>等等，但是我们在点击地鼠的时候，地鼠的动画效果就要去掉啊，这说明地鼠也要有一个状态区分才对，说明地鼠也要一个radio，我们再来写个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/34susliks/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们利用同一个radio组只能有一个被选中的特点，就能很好地完成这个任务。将label前面的radio和卡位的radio的name设为一样，这样它们就在同一组，当卡位radio被checked的时候，label前面的radio就会被uncheck，这样我们就可以取消animation动画。</p>
<p>好了，知识点都熟悉完毕，例子也写完了，把这块功能加入打地鼠游戏吧：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case03/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/34susliks/resources/case03/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/34susliks/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这样，就差时间到后第三个场景的进入和键盘按键响应了，但是这两个我还真是没有思路啊！</p>