<p>首先来看看多重背景吧。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/28css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>多重背景其实很简单，CSS3允许我们书写多个background的规则，浏览器会把它们渲染出来，这就是多重背景。</p>
<p>text-overflow是当文本过长时的截断策略，word-wrap也是，看个例子： </p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/28css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>text-overflow : ellipsis;可以让文字超出的部分变成省略号，但是这个属性一定要和overflow : hidden;white-space : nowrap;配合使用，overflow : hidden;是让超出部分不显示，white-space : nowrap;是让文字不换行。word-wrap我们在<a href="http://petshow.webxinxin.com/" target="_blank">petshow</a>中用过，它的作用是对于一个很长的单词，超出了box，可以强行打断，防止它超出盒子。</p>
<p>再来看看多列布局，它可以让我们的版式大变样：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/28css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>怎么样，是不是看上去有点像报纸，如果要做一个报纸的网站，那么这个样式就应用得很广泛了。最简单的就是用column-count来指定列数。当然我们还有很多其他的属性可以设置，如div2中的属性。</p>
<p>最后我们来看看CSS3中最重要的一个特性，响应式，也就是媒体查询，它是为了手机网页而存在的，我们来简单的看一看：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/28css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/28css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>拖动浏览器，改变宽度，看看效果。通过@media (max-width:800px)来指定在什么样的宽度范围内，该使用什么样的样式。通过这个属性，我们就能够在手机、pad和电脑上构建出不同样式的网页去适配这些终端。</p>
<p>到此，CSS3的新特性介绍完毕，很多、很炫、很酷，真是高端大气上档次，狂暴酷炫屌炸天，这样的功能，有什么理由不去掌握呢。</p>