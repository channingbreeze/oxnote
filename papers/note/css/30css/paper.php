<p>废话不多说，先上个高大上的例子，旋转木马：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/30css/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>其实思路很简单，但是有几个点要注意：一、我们在最外层的div上面设置了perspective:800px，这是什么意思呢？意思就是我们的眼睛离屏幕800px，注意，这里是空间哦！然后我们设置了perspective-origin:top;，这是从上往下俯视。二、设置transform-style:preserve-3d;，这个属性要设置在进行变换的li们的父节点上，在这里就是ul，它的意思是以3D的方式来显示。三、transform中的rotateY和translateZ可以指定运动的轴。然后就是简单的旋转和移动了，起始时在一个位置，然后转动不同角度，再向前走一段距离，就形成了一个圈，在结合animation来个动画，就形成了旋转木马了。由于浏览器兼容的问题，代码有点多，但是逻辑并不复杂。360中无法从顶部观看，ie中有时后面会挡住前面，当然了，这些算是浏览器的bug，我们也无能为力。（如果有读者能够解决，欢迎告诉我！）</p>
<p>下面来看看第二个例子，立体翻滚的效果：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case02/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/30css/resources/case02/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>初始状态，粉色的div向前走50px，注意，正好是高度的一半，蓝色div向下转，再向前走50px。然后，当hover容器的时候，将容器整体转90度，注意，此时的旋转中心轴正好是立方体的中心，这也是为什么要向前走50px的原因。同样在360和ie中无法正常展示，无奈。</p>
<p>再来看看最后一个例子，立方体：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case03/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/css/30css/resources/case03/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/css/30css/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>其实这个对我们来说就相对简单了，只要把6个面旋转和移动到相应的位置，再来个透视就好了。再给容器一个转动角度，就能够看到立体的立方体了。同样在360和ie中无法正常展示，服了。</p>
<p>立体效果能够为网页增色不少，不过在ie和ie内核的360浏览器这里不受待见，所以对于浏览器兼容性要求较高的网站还是慎用吧。</p>
