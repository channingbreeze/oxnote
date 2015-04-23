<p>CSS3的动画效果有两大类，一种是transitions，它可以支持从一种属性平滑过渡到另一种属性，另一个是Animations，它可以支持某些关键帧的复杂动作。老惯例，先来看个简单的例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/26css/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>上一节的第一个例子，加了transition，同样有浏览器兼容性问题。Transition属性可以让元素从一个状态到另一个状态的改变平滑过渡。它有四个参数，第一个transition-property可以指定需要过渡的属性，一般是all，第二个就是变化的时间，第三个是变化方式，常用的有linear匀速、ease-in加速、ease-out减速、默认是ease逐渐变慢，第四个参数是delay，也就是指定动画延迟多长时间开始执行。我们在hover的时候让元素进行transform，所以鼠标hover就能看到效果啦！</p>
<p>另外一个是Animation，也来看个例子先：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/26css/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>首先，我们用@ -webkit-keyframes定义了一个叫做bubble的动画，指定了它在0%，10%，50%，90%和100%这几个关键点的状态。为了兼容性，还是写了四份。在引用的时候，可以通过animation来引用，它有六个属性，第一个是动画名，第二个是时间，第三个是方式，第四个是延时，第五个是次数，第六个是方向（可以设置成奇数次是正方向，偶数次是反方向）。但是只用一个animation写的话，在firefox和ie中是不行的，所以为了浏览器兼容性，建议还是分开写，像示例一样。其实很容易理解，但是为了浏览器兼容性，代码就多起来了，哎！</p>
<p>下面我们来个较为综合的例子，我们做一个旋转的八卦：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case03/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/26css/resources/case03/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/26css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>首先是八卦的样式，其实八卦就是由两个半圆，一黑一白，然后再又一个白环黑心和一个黑环白心的圆组成，这里，半圆我们用到了border-radius，我们将一边的border设得特别大，然后设置圆角半径，就可以做出一个半圆，而两个圆环就用before和after伪元素来做了。旋转动画就很简单咯，设置rotate的角度就行。</p>
<p>发挥想象，你可以做出相当棒的效果了。</p>