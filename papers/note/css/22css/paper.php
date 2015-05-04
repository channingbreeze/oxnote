<p>CSS3是最近兴起的一种技术，就是因为css2之前的功能太局限，不能满足需求，所以有关组织研究出了css3这门技术。其实也就是在原来的css基础上增加了很多扩展功能，不过功能确实是很强大。今天先来看两个知识点，不过这里的例子一定要用版本较高的浏览器运行哦，推荐chrome。</p>
<p>好了，废话不多说，闲来看第一个例子，圆角盒子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/22css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>其实很简单，可以通过border-radius设置圆角半径，还能分别设置4个角的圆角半径。</p>
<p>觉得没什么用，那是没有发挥想象，看看下面这个例子，一个奥运五环：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/22css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>首先，如果圆角半径就等于宽度的一半，那么不就可以形成圆形吗？而由之前的盒子模型，要把border的厚度也考虑进去。然后再通过left和top的偏移设置就可以定位五环。最后也是最复杂的，就是相互覆盖的关系，这里我们把需要覆盖的圆形复制了一份，然后通过设置z-index和一些边的透明，来实现了五环的效果。</p>
<p>还有一个特别不错的属性就是box-shadow，可以用来设置盒子的阴影，来看看例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/22css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个box-shadow可以设置6个属性，分别是投影方式，x的偏移，y的偏移，模糊半径，扩展半径和颜色，也可以设置多重阴影，中间用逗号隔开。投影方式默认外投影，如果设置为inset则为内投影。</p>
<p>阴影能干什么？再来看个实际例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/22css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/22css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这样一设置，照片是不是就显得高大上了呢？用它来显示<a href="http://petshow.webxinxin.com/" target="_blank">petshow</a>中的照片岂不是效果会好很多？</p>