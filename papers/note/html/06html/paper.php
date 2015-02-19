<p>定位其实就是设置style里面的position，默认是static，也就是我们之前的例子得到的那种效果。还有比较重要的是relative和absolute。要仔细分析下。</p>
<p>relative是相对定位，我们可以先来看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/06html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/06html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这就是relative，第二个盒子设置了position为relative，就可以设置他的left和top属性，它对<b>相对于它原来的位置</b>进行偏移。但是要注意到，这<b>对其他两个盒子的位置没有影响</b>。我们再看看绝对定位，absolute：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/06html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/06html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个结果有没有看懂？绝对定位的时候，div2的left和top就不是相对于它原来的位置了，而是相对于body这个元素，同时，<b>它原来的位置也不复存在</b>，div3会紧接着排在div1后面。</p>
<p>很奇怪，为什么绝对定位会相对于body，其实他并不是相对于body，而是<b>相对于离它最近的定位为非static的元素</b>，举个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/06html/resources/case03.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/06html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子可以很好地说明问题，第一个bigbox没有设置position，默认是static，里面的子元素div2不会相对它计算，会<b>再往上找非static的父元素</b>，找到body。而第二个bigbox设置了position为relative，所以里面的子元素div2就会相对于它来计算。</p>
<p>定位可以用来作点啥呢？只要开动大脑，很多东西都能做出来。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/06html/resources/case04.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/06html/resources/case04.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>将5个字的top和left分别偏移不同的像素，就构成了重影字效果。</p>