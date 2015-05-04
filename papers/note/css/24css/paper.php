<p>CSS3的渐变分为两种，线性渐变和径向渐变，先来看看线性渐变：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/24css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>首先需要注意的是，这里不是设置background-color，而是直接设置background，渐变可以当作图片资源来看待，所以能用url的地方就能用渐变。这是一个很简单的例子，从上到下的线性渐变，但是代码有点复杂，这是因为要兼容不同内核的浏览器。先来看看-moz-linear-gradient，这是Gecko引擎浏览器的写法，常见的是火狐浏览器。主要是三个参数，第一个是渐变方向，可取top、left、bottom、right以及它们的组合如top left，第二三个参数是起始颜色和终止颜色。-webkit-gradient是老式的Webkit引擎的写法，一共五个参数，第一个是渐变类型，线性渐变就是linear咯，第二三个参数是起点和终点，第四五个参数是起始颜色和终止颜色。-webkit-linear-gradient是新式Webkit引擎的写法，参数意义和第一个一样。-o-linear-gradient是Presto引擎的写法，典型的有Opera，但是测试下来新版的opera也不认这种写法，认webkit写法，不知道怎么回事。-ms-linear-gradient是IE的写法。linear-gradient是W3C推荐的标准写法，但是好像没有那个浏览器实现了。</p>
<p>除了基本写法，线性渐变还有其他用法，看看例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/24css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>线性渐变还能使用角度，这样任意方向都不怕啦，还能多重渐变，怎么样很棒吧？</p>
<p>下面再来看看径向渐变，先来个简单例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/24css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>径向渐变和线性渐变一样，也有浏览器兼容性问题，只要把线性渐变的linear改成radial就能变成径向渐变了。</p>
<p>当然径向渐变也有其他的用法，和线性渐变最大的不同就是它能够实现椭圆渐变。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/24css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/24css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>和线性渐变类似，这里不赘述了。</p>
<p>当然，渐变还有一些其他的用法，比如设置径向渐变的圆心呀，等等。但是这些用法不是对每一个浏览器都适用的，甚至一些主流的浏览器也不行，所以这里就不介绍啦。况且这些渐变就足够我们用啦！</p>