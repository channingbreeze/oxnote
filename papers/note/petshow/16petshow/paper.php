<p>我们先来看首页，首先整个网站有一个背景色，需要给body一个background-color，然后标题栏可以是一个div，图片展示区是一个div，日记展示区是一个div。标题栏中的元素用div配合margin和左浮就能搞定，其中的几个超链可以用ul li来搞定。图片展示区是典型的ul li用武之地，九宫格的样式我们之前已经做过。下面的日记展示区也是ul li，所以这个页面很快就能做出来：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/16petshow/resources/index.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/16petshow/resources/index.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p><b>我知道你看这个是看不懂的，最好的学习方法就是自己实现，有什么不懂的再来这里对照哦</b>。</p>
<p>在这里，我们用到了*选择器，用它把margin和padding清零，避免一些元素自带的margin和padding给我们带来困扰。而其他的，就是用div的嵌套就能搞定了，其实div布局，主要是搞清楚嵌套关系，搞清楚了嵌套关系，其他的就迎刃而解了。</p>
<p>再来看看图片页，其实与主页的技巧类似，要注意clear的用法，可用来清除浮动。但是图片页还有一个遮罩的效果，这个效果就要用到一些技巧了。首先是半透明的遮罩层，需要设置透明度，通过opacity来设置，然后是中间的大图，我们希望页面滚动时，大图始终出现在视野中，这就要用到position中非常重要，但是我们没讲的fixed，fixed就是指无论页面怎么滚动，它都不会随着页面滚动，就像固定在那里一样。图片和按钮的定位就是用top和left啦，那么怎么居中呢，可以先设置margin-left为50%，然后left设为-(width/2)px，最后一点就是遮罩层的高度，设为100%是不行的，因为当滚动的时候，遮罩会遮不全，这就要借助于javascript，document.body.scrollHeight就是body的全高，但是body要等页面加载完毕才能算出全高，所以要延迟100ms后再执行高度设定，也就出现了代码中的javascript。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/16petshow/resources/pic.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/16petshow/resources/pic.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>再来看看日记页，同样用div布局，没有什么特别：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/16petshow/resources/blog.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/16petshow/resources/blog.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>日记详情页，技巧类似，值得注意的就是p标签，也就是段落标签，首行缩进可以用text-indent来实现。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/16petshow/resources/blog_detail.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/16petshow/resources/blog_detail.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>最后就是管理页面了，其他都是类似的，只有select与视觉稿不用，因为select的样式很难定制，一般select要自定义样式都是用插件或者自己用div配合javascript来实现，而且这里是后台系统，不展现给用户，所以这里暂时就用默认的select效果好了。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/16petshow/resources/admin.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/16petshow/resources/admin.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这样，前端页面就全部完成了，其实使用的技术很简单，关键还是细心和耐心，前端编写可谓所见即所得，写完后刷新就能看到效果，所以还是很好做的。</p>
<p><b>本文的代码放在<a href="https://github.com/channingbreeze/petshow/tree/front" target="_blank" rel="nofollow">这里</a>，欢迎大家下载！</b></p>