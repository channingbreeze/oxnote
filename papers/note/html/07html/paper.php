<p>之前没接触过JavaScript，但是看了一下，入门还真是挺简单的，入门案例如下：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/07html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/07html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>JavaScript脚本一般写在script标签内，window.onload是当网页被打开加载的时候会触发的事件，我们让它等于一个函数，意思是网页打开的时候去执行这个函数。window.alert是弹框，内容就是里面的字符串啦！</p>
<p>那么浏览器是怎么执行这段代码的呢？首先浏览器会执行所有script标签中的代码，然后会触发一些事件，而绑定了事件监听的代码在相应事件被触发的时候就会被执行啦，不懂的话再来看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/07html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/07html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子是点击按钮的时候能够弹出对话框。注意，这里我们用document.getElementById的方法来获取元素，其中id就是对应button中的id属性啦。这时并不是一打开网页就会弹框，因为打开网页时，我们只是给按钮的点击事件绑定了监听器，而当真正点击按钮的时候，才产生点击事件，这时候才会触发function中的代码，弹出框框。还有一点值得注意，这里的script要写在button之后，因为浏览器是顺序加载html，如果在执行script之前，没有找到对应的button，那么将不能绑定事件。</p>
<p>有了这个基础，再结合display，我们很容易就能做出tab切换的效果：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/07html/resources/case03.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/07html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>在JavaScript里面var就是变量的意思，我们把id为tab1的div存在一个叫做tab1的变量里面，给它绑定点击事件，在点击的时候改变content的显示与非显示，就完成了tab切换。需要注意的是，我们在这里定义了一个hideAll函数，然后就可以通过hideAll()来调用它，在JavaScript中，函数也可以被看成一个变量。</p>