<p>div是一个块元素，可以通过style属性设置其宽高，可以看例子：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/02html/resources/case01.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/02html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子中，style属性可以设置div元素的宽、高和背景色，这个例子一看就懂，需要注意的是，div每个元素都要占一行，不会从左到右排列，如果想让它从左到右排列，就要用到第二个法宝了，float。</p>
<p>再看例子：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/02html/resources/case02.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/02html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这下我们就清楚了float的作用了，当然有float:left就有float:right，一个是左浮，一个是右浮。</p>
<p>当然还有一个事情不得不记一下，因为发现这个现象我还是有点惊讶的，看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/02html/resources/case03.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/02html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>如果设置了float的div和没设置float的div混合，效果就是这样，其中的规律我总结了一下：设置了float的div会按照其原来的位置浮动，但是不会影响没有设置浮动div的位置。当然，这个规律知道就行了，我可不会笨到混用。</p>
<p>好了，来试试W3School的页面布局吧。</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/02html/resources/case04.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/02html/resources/case04.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>是不是有点像，有点成就感呢？在这里有几个知识点要记录一下：1、body中也能通过设置style来设置背景色；2、为了让div居中，可以通过style设置margin: 0px auto;，这里margin的意思是边距，但是不是这次的重点，就知道这个小技巧可以让div居中就行啦；3、通过div嵌div就可以实现复杂布局了。</p>
<p>这个页面做出来还是比较有成就感的，但是感觉内容还是有点空洞呀！</p>