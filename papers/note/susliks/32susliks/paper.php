<p>先来看一看label是什么神奇的东西：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/32susliks/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这是一个很简单的例子，但是很好地说明了label的用法，label的for指向元素的id，这样点击label就相当于点击了元素，在这里也就是checkbox。所以不管我们的label在什么位置，我们都可以去点击到checkbox。</p>
<p>那么这有什么用呢？我们用到checked属性就不一样了。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/32susliks/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们用label来控制checkbox的checked状态，然后在checked和非checked的时候分别设置checkbox后面的div的背景色，然后我们把checkbox隐藏起来，这样在点击label的时候，div的背景色就能随之变化了。就好像响应了点击一样。</p>
<p>明白了这一点，我们就可以实现打地鼠中的开始按钮的响应了。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/32susliks/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/32susliks/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们加了一个checkbox，然后让它绝对定位，top和left设置让它不要出现在视线内。然后我们在checked之后，让第一个场景的window透明度变为0，同时要加上这句：pointer-events: none;，这是让这个场景不要再响应点击，不然的话，再点击按钮，第一个场景又回来了。我们让第一个场景盖住第二个场景，然后在点击开始的时候，让第一个场景的透明度慢慢变为0，这样第二个场景就自动出现了。</p>
<p>好啦，最难的部分终于实现啦，这下可以安心啦，接下来就实现动画的部分吧！</p>