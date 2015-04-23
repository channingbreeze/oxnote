<p>CSS全称叫做层叠样式表，是专门用来描述样式的语言，其实我们可以直接把style的东西写在一个新的文件中，叫做style.css，然后通过link去引用。看一个简单的例子：</p>
<p>index.html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/21css/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/21css/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>style.css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/21css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们的index.html中并没有mydiv这个类样式，而在style.css中却有mydiv的定义，我们通过&lt;link href="style.css" rel="stylesheet" /&gt;来引用style.css文件。</p>
<p>其实css是很强大的，我们来做一个二级菜单看看：</p>
<p>index.html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/21css/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/21css/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>style.css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/21css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>二级菜单用css完全可以实现，不需要js帮助。而且文档和样式分离后，html只有40多行，css也是40多行，并且分工明确，管理起来也很方便，实在是非常好的一种解决方案。</p>
<p>文档样式分离是一种非常重要的技术，实际做网站几乎全部都是采用这种方式，所以一定要掌握哦！</p>