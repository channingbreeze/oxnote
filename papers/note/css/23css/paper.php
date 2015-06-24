<p>CSS3为文字添加了很多特效，做特效文字不必再使用图片了，首先我们看一下text-shadow，文字阴影。看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/23css/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>text-shadow有4个属性可以设置：x的偏移，y的偏移，模糊半径和颜色，比box-shadow少两个。它同样可以设置多重样式，还记得之前用position实现的重影字么？用text-shadow直接就能实现，方便很多啊。text-shadow使用得好还能产生很多很不错的效果，这些效果其实就是用多重阴影叠加起来的。</p>
<p>然后我们来看看自定义的字体怎么弄。这就要用到@font-face这个东西了。首先要解决的问题就是字体去哪里找，可以在<a href="http://www.dafont.com/" target="_blank" rel="nofollow">这里</a>找到，自己找字体，点击download就能下载，下载下来解压后是一个ttf的文件，这就是字体文件了。ttf是一种字体格式，但是只有这一种格式还不够，通过ttf我们还可以生成其他格式的字体，这就要到<a href="http://www.fontsquirrel.com/" target="_blank" rel="nofollow">这里</a>了，其实这个网站也能下载字体，看大家习惯啦，要生成@font-face所需要的字体，可以点击网站上面的<a href="http://www.fontsquirrel.com/tools/webfont-generator" target="_blank" rel="nofollow">WEBFONT GENERATOR</a>，上传ttf文件，三个单选可以选择OPTIMAL，勾上Agreenment，就可以点击DOWNLOAD YOUR KIT下载文件了。这个包里面的东西就全了，有我们要的所有字体文件，还有一个stylesheet.css告诉我们怎么写@font-face，还有一个demo.html，到这里相信大家都会了，来个例子看看：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/23css/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们定义好@font-face之后，只要在使用到字体的地方设置font-family，对应@font-face中的font-family，就可以引用自定义字体了，记得把所有的字体文件都拷过来哦！</p>
<p>有时候我们的网站中会需要一些图标，我们可以用图片，但是一个好的前端工程师会依赖图片吗，NO，字体也能变成图标！那么问题还是怎么找图标呢？到<a href="https://icomoon.io/" target="_blank" rel="nofollow">这里</a>来，点击<a href="https://icomoon.io/app/" target="_blank" rel="nofollow">IconMoon App</a>，看到了吧？这里有很多图标，我们选择几个图标，注意哦，被选中的图标会呈橙色高亮状态。选好后，点击网页下方右侧的CREATE FONT，然后再download就行。同样，下载的包里面有style.css和demo.html，还有fonts。打开css和demo看看，就明白了，其实也是用font-face，只是引用图标的时候要用demo中的方式引用。我的实现：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/23css/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>不过作为一个中国人，我还是有点不满意，好像还没有试过自定义中文字体呢，赶紧来试试吧，上面的方法好像无法创建中文字体，难道就这样放弃吗？不行，玩命也要做出来。在网上搜索解决方案，发现了<a href="http://www.youziku.com/" target="_blank" rel="nofollow">有字库</a>网站。正是我的菜，按照说明，很快就能做出一个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/23css/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/23css/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>竟然不用写css和font-face啥的，因为css在有字库的网站上，是通过js下载到本地的，这就是云字库的意思啦，不过下载需要时间，过程有点慢，效果就是这样，大家看着办吧！</p>
<p>有了这些神器，妈妈还会担心我的字体不够用吗？</p>