<p>首先来看看几个基本选择器：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/27css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>*选择器可以选择所有元素，经常用来清margin和padding，这种用法之前也见过。元素选择器可以选择某个tag，如这里的div，会对所有div生效。类选择器和id选择器最常用，这里不多讲了。但是类选择器还可以和元素选择器合用，如li.out，只会选择li中的out的class。</p>
<p>后代选择器.inUl li，会选择.inUl下的所有li。子元素选择器#sec > span，只会选择#sec的子span，而孙span是不会被作用的。相邻兄弟元素选择器li.active + li，只会选择li.active的后面一个兄弟li。通用兄弟元素选择器li.active ~ li，选择li.active后面的所有兄弟li。注意，相邻兄弟元素选择器和通用兄弟元素选择器都是选择后面的。群组选择器.secondli, .active，可以设置.secondli和.active的公共样式，也十分常用。</p>
<p>这个例子看起来可能不是很好，大家一定要动手自己去实践一下，才能掌握这些选择器。</p>
<p>下面我们来看看属性选择器，它是给带有指定属性的HTML元素设置样式，来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/27css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>li[id]是选择带有id属性的li元素。li[id="1"]是选择id=1的li元素。li[id~="a"]选择属性词列表中包含a的li元素，如id=”2 a”，词列表就是2和a，词列表一定是用空格分开。li[id^="1"]选择属性中以1开头的li元素。li[id$="b"]选择属性中以b结尾的li元素。li[id*=" "]选择属性中包含空格的li元素。li[id|="c"]选择id以c或者c-开头的li元素。</p>
<p>属性选择器不仅仅可以选择id，还可以选择其他任何属性，而且功能丰富，在实际开发中要有意识地把属性按照属性选择器好选的格式进行设定。</p>
<p>最后我们来看看伪类选择器，其实这个我们之前也接触过一点，比如:hover，但是不够全面，今天就来全面了解它：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/27css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>首先来看看a标签的四个伪类，link表示没有被点击之前的样子，visited表示被点击之后的样子，hover表示鼠标移动上去的样子，active表示点击时候的样子，这四个标签是有顺序的，符合爱恨规则，LoVe/HAte。第二个知识点就是UI元素了，enabled，disabled，checked，对于input或button等等，有enabled，disabled状态，对于radio和checkbox等等，有checked状态，我们可以通过伪类来设置这些状态。第三个知识点就是位置选择器，first-child和last-child可以选择第一个和最后一个元素，如案例中的li，nth-child(n)可以更确定地选择某个元素，还可以使用变量n，浏览器会把n从0开始迭代，1，2……直到超出范围。第四个知识点就是伪元素了，也就是我们之前接触过的::before和::after，还有::first-letter比较常用，可以帮我们选择第一个字母。</p>
<p>知识点介绍完了，是时候回答欣欣的问题了，checkbox更换图片。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/27css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/27css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>思路很简单，就是在checkbox后面加上一个span，然后通过input[type="checkbox"] + span和input[type="checkbox"]:checked + span来对span设置不同的样式，我们为span设置一个background，然后准备两张图片，一张是选中的，一张是未选中的。下面的问题就是怎么让背景图移动到文字的左边，答案是padding-left : 20px;margin-left : -20px;，通过margin和padding的组合，背景图就到左边去了，然后我们把checkbox的大小设为和图片大小一样，通过left和top把它的位置和图片位置重合，然后把checkbox的透明度设为0，就完成了。虽然是一个简单的功能，但是综合的css知识点还是很多的。</p>
<p>这一节的知识点较多较杂，大家一定要自己动手实践下才能学得会哦！</p>