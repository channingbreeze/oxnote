<p>CSS3的变形有移动、旋转、缩放、扭曲四种，来看个例子先：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/25css/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>移动的话就是用translate，两个属性，x方向和y方向。同样有浏览器兼容性问题。旋转是rotate，只有一个参数就是度数。缩放是scale，两个参数，x方向的缩放因子和y方向的缩放因子。扭曲是skew，两个参数，x方向的扭曲角度和y方向的扭曲角度。</p>
<p>这里默认时所有的变形都是以中心点位变化原点，那么能不能改变变化原点呢？当然可以，我们试着改变一下，还是原来的变化，只是把变化原点改为左上角：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/25css/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>大家可以对比看看效果，相信很快就能理解transform-origin的意思。</p>
<p>那么基于transform和之前学过的一些文字特效，我们可以做出一些有意思的效果，比如说镜像：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case03/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/25css/resources/case03/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个例子看懂了吗？我们设置scale的y因子为-1，这样就相当于镜像了，而为了实现渐变效果，我们用了一个白色透明度从1变为0的东西叠加到镜像上面，就形成了这种效果。这里可能大家最不理解的就是before和after了，这也是前端常用的一个技巧，大家可以打开chrome的Elements看看，会不会多出一个::before和::after呢？</p>
<p>补充一个before和after的简单例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case04/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/25css/resources/case04/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/25css/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个例子很简单吧，看看就懂了，我就不解释了！</p>