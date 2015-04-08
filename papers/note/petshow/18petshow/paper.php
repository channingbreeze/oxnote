<p>其实后台也不是很难，就是从服务器中取出数据，然后放到前端展示就好啦。</p>
<p>首先我们需要一个操作数据库的类，想起了我之前封装的SQLHelper，直接拿来用就好了，改改数据库名，用户名，密码就能用了，这就是代码积累的好处呀！这个文件就不展示啦！</p>
<p>好了，有了SQLHelper之后，index页面就是将前四个pic_title取出，然后分别取出对应title的最新9个图片，然后展示出来，对于日记，就取最新两条日记就好。来看看代码：（因为这节是改后台，所以style就直接跳过好啦，下同）</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/petshow/18petshow/resources/index.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/18petshow/resources/index.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>代码中sql里面的limit 0,4就是从第0条开始取，取四条，order by id desc是指按id降序排列，这就是数据库的好处，可以帮我们方便地整理数据，而sql就是数据库的精华。一开始数据库中没有数据，我们可以先人为插入一些数据进去，方便调试。</p>
<p>对于图片页，数据同样是这样取出后展示，关键是点击图片要能够显示大图，还得可以左右切换，这就需要javascript来帮忙了。先看看效果：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/petshow/18petshow/resources/pic.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/18petshow/resources/pic.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>我们先在li上加上cursor:pointer;，这样，鼠标放上去就会有手型图案了。然后我们在li的属性中加了id和pid，分别存储picture的id和pic_title的id，然后在for循环的时候，构建titles二维数组。如果不清楚titles的结构，那么建议你<b>使用chrome浏览器，在浏览器右键，选择审查元素，选中console，然后输入titles，回车，就能够看见titles的结构了</b>。关于chrome的调试技巧，建议看看<a href="http://jingyan.baidu.com/article/4b52d7028b99d2fc5c774b83.html" target="_blank" rel="nofollow">这里</a>，主要看console部分。</p>
<p>之后，我们又写了两个函数，showBigImg和hideBigImg，用来显示和隐藏大图，在id为bigPic的div上面绑定onclick，然后根据e.target.id来区分到底click了哪个div，如果点击了灰色遮罩，那么就将大图隐藏了。点击了li，就通过<b>this.getAttribute</b>拿到它的id和pid，这里的this就是一个li，然后再从titles中取得图片path，将大图的src设置为path，就能显示大图了，左右切换的按钮，就是在titles中去加减索引，然后拿到对应的path就ok了。需要注意的是，这里为了得到包含图片的li，我们为每个需要被选的li加了.imgLi的class，然后用document.<b>querySelectorAll</b>(".imgLi")将元素选择出来，这是一种非常常用的方式。</p>
<p>Blog页面是类似的，来看看代码：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/petshow/18petshow/resources/blog.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/18petshow/resources/blog.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>知识点基本上和上面的一样，只是这里的跳转用的是window.location.href，直接设置它，浏览器就会跳转。</p>
<p>Blog_detail页面，就很简单了，只是根据参数得到id，将blog取出，然后展示就好了。源码如下：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/petshow/18petshow/resources/blog_detail.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/18petshow/resources/blog_detail.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>做完后台之后总结一下，其实后台基本逻辑就是从数据库将数据取出来，然后放到前端html中展示就好了，其实比较复杂的在于交互，也就是前端javascript的一些东西。这次还没用到ajax，下次的管理后台页面就要用到了。</p>
<p><b>本文的代码放在<a href="https://github.com/channingbreeze/petshow/tree/back" target="_blank" rel="nofollow">这里</a>，欢迎大家下载！</b></p>