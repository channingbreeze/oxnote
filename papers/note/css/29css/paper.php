<p>既然欣欣这么喜欢精灵按钮，先来个精灵按钮的效果，这个效果大概是一个颜色渐变加上一个外边框的旋风效果，先睹为快：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/29css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>既然之前学过了，这里就只讲讲思路，背景的变化是非常简单的，设置a的transition，然后在a:hover的时候给一个变化就行。四根线就是四个div，绝对定位设置好初始位置，初始透明度为0，然后a:hover的时候，移动位置，同时透明度变为1，就完成了这个效果。这里面的主要知识点有定位和transition，当然还有你丰富的想象力。</p>
<p>好了，看下一个效果，这个效果是我们经常看到的，一个盒子，当鼠标放上去的时候，就有一个东西升上来，其实实现也很简单：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/29css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这里用到了overflow:hidden，将超出li的部分隐藏，然后通过div的top属性来让盒子升起。案例较简单，大家可以自己看代码。</p>
<p>再来一个例子，就是一个圆圈，鼠标放上去的时候会旋转360度并放大，看看代码：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/29css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个效果在一些网站上也经常看见，其实就是用transform加上transition来实现的，看看代码吧，很简单就能实现。</p>
<p>最后一个效果是翻页的效果，当鼠标放上去的时候，box就向后转了：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/29css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/29css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这里用到了transform中的rotateY，它可以让元素按照Y轴旋转，那么这个例子就很简单了。初始状态，让back绕Y轴转180度，藏起来，hover的时候，front绕Y轴转180度，同时消失，back绕Y轴恢复0度，同时显示。</p>
<p>这四个例子都是可以用在网页中制作特效的很实用的例子，用了CSS3特效，网页一下子就能够高大上很多了。</p>