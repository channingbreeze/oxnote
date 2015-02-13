<p>先来看下欣欣说得上一个笔记的坏味道，看看ul和li怎么重写九个盒子的例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/04html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/04html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>果然很简单，样式上只改动两点：1、设置li的list-style-type为none，去掉前面的小圆点；2、设置ul的padding为0px，去掉ul的内边距。</p>
<p>迫不及待想试试导航栏效果，看看例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/04html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/04html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子稍微和W3School的不一样，不过原理是一样的，主要有以下几点：1、想让li中的文字水平居中，可设置text-align为center；2、想让a标签中的文字垂直居中，可设置line-height等于height；3、a标签是行内元素，不是块元素，想要使它的width和height生效，要设置display为block，指定以块元素来显示，li默认是块元素，所以我们不用设置；4、可以通过color设置字体颜色，通过font-size设置字体大小；5、可以通过text-decoration来设定a标签的下划线是否显示；6、最最重要的a:hover，可以设置鼠标划过时，a标签的样式。</p>
<p>话说其他元素也能用hover呢，再来看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/04html/resources/case03.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/04html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子应该是很好懂的，需要注意的就是.xxxLi:hover，其实类选择器也是可以使用hover的，好了，有了hover这样的法器，我的页面又能增色不少了。</p>