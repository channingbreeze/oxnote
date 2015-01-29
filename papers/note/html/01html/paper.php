<p>HTML是一门标记语言，它的基本结构是这样的：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/01html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/01html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>其中，第一行声明这是一个HTML文档；head是一些头信息，其中charset是字符集，title是页面标题；body中是页面内容。</p>
<p>HTML用普通的文本编辑器就能编写，后缀改为html就能用浏览器打开。也可以用欣欣推荐的notepad++。</p>
<p>一些比较重要的标签是：h1、h2、h3等等，可以作为标题；p是段落标签；a是超链接；img是图片；hr是水平线；table是表格；ul和li是列表；div是块元素；span是行内元素；form是表单。</p>
<p>每一个标签都有自己的属性，如a标签有href属性，可以指定跳转的链接。学习html就是要熟悉这些元素和它的属性。</p>
<p>好啦，重要的就这么多，下面我总结一个例子吧。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/01html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/01html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这么轻松就把html搞懂了，还真是挺简单的，但是怎么还是感觉做不出漂亮的网页呢？</p>