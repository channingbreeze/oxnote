<p>仔细分析分析这个游戏，其实最难的就是地鼠和绿色油漆桶的绘制了，绿色油漆桶看上去还简单些，那就先来解决它吧：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/31susliks/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>基本上都是我们学过的，只是background-image的linear用了百分比，来指定在某个百分比的地方的颜色，从而实现更精确的渐变控制。注意，在这里-webkit-linear-gradient是left，而linear-gradient是to right，其他方向也是类似。而在before中，background-image用了3个渐变叠加，这也是多重背景的应用。Linear中，可以指定百分比，也可以指定像素，这里用像素实现了before顶部和底部的高光效果。</p>
<p>然后就是地鼠的绘制了，来看看：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/31susliks/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>地鼠的绘制利用了多重背景的特性，主体给一个border-radius，然后就利用多重背景来绘制眼睛和鼻子了。每一个圆圈都是一个径向渐变，径向渐变的第一个参数，之前我们用的是类似top这种，这里我们精确指定像素，第三个参数和第四个参数，我们也指定渐变半径的大小，这里用的是百分比，半径之内的绘制颜色，半径之外的透明，这样就完成了圆圈的绘制。两个耳朵的绘制就用before和after就行啦，手段都是一样的。</p>
<p>好了，让我们来画一下三个场景吧！</p>
<p>先来看看第一个场景，是游戏开始时的场景：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case03/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/31susliks/resources/case03/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>其他的样式对我们来说应该很简单，这里主要注意两点。第一、我们把.susliks的position由absolute改为了relative，因为relative可以用margin: 0px auto来左右居中，而absolute不行，原因也很简单，relative的元素还是占有原来的位置，所以设置margin还是能生效，而absolute则完全没有原来的位置了，故设置margin也就不生效啦。第二、box-sizing，我们设置了border-box，和普通的盒子模型有什么不同呢？普通盒子模型设置width和height，是不会包含border的，所以我们还要另算border，有时候很麻烦，所以我们可以设置box-sizing: border-box;，这样的话width和height就把border包含进去了。</p>
<p>第二个场景的话还有一个麻烦事儿，那就是绿色的深浅相交的草地，</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case04/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/31susliks/resources/case04/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case04/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>其实草地的效果很明显是用了3D转换，就是一个div绕x轴旋转了45度，而深浅相交的div正是用了nth-child选择器。其实技术说破了都很简单，但是在一开始能够想到还是不简单的。其他的东西对我们来说应该很简单了，就是用绝对定位来放好位置就行。注意，这里使用了3D转换，360和ie请注意测试，在我这里360是没有效果的。</p>
<p>第三个场景和第一个场景类似，都不是很麻烦：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case05/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/31susliks/resources/case05/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/31susliks/resources/case05/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>用绝对定位把地鼠调整到合适的位置就好了。</p>
<p>样式都做好了，但是实在是不知道怎么响应鼠标的点击事件啊，明天去请教下欣欣好了！</p>