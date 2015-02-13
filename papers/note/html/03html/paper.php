<p>欣欣说我的html代码太长，可以用类，在网上找了一下，原来全名叫<b>类选择器</b>，除了类选择器，还有<b>元素选择器</b>，可以直接作用在html元素上。赶紧来试一试，把上节的例子重写一下吧。</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/03html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/03html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这样看起来果然html代码清爽多了，div通过类选择器来指定样式，body的样式则是通过元素选择器来指定的。值得注意的是：1、样式都是写在style标签中，这个标签是放在head里面的；2、类选择器定义的时候前面以点开头，引用的时候用class，不需要加点哦；3、元素选择器前面不需要加点，也不需要引用。这部分知识还挺深的，以后再研究吧，不然就本末倒置了。</p>
<p>来看看重点：<b>盒子模型</b>。其实在W3School中就有介绍，在<a href="http://www.w3school.com.cn/css/css_boxmodel.asp" rel="nofollow" target="_blank">这里</a>，看完这个我就彻底明白了，原来我们设置div的width和height，只是最内部的，还有内边距padding和外边距margin，还可以通过border设置边框，来个例子试试：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/03html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/03html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这可是一个不折不扣的盒子，可以看到，由于margin的存在，盒子离浏览器边界有距离，由于padding的存在，内部文字与边框也隔了一定距离。在例子中有两点要注意，一是把body的margin和padding设为0了，这是因为body默认是有padding的，如果你细心的话，就会发现，上节的<a href="papers/note/html/02html/resources/case04.html" target="_blank">例子</a>中，div并没有贴着浏览器，这就是最好的证据；二是border的设置，一次用了三个样式，这种方法还是第一次见吧。</p>
<p>这个例子是比较重要的，一定要反复琢磨，可以把其中一些样式去掉，再看看效果来理解。</p>
<p>盒子模型和float结合起来，就可以做出一个排列，来看个小例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/03html/resources/case03.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/03html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>怎样？九个小盒子均匀地分布在一个大盒子里面，这里面的margin和width、height之间的关系，能看出来的话就说明这节搞懂了。</p>
<p>我明白盒子模型的意义了，<b>很多网页上都有一块一块的区域，这些都是盒子模型的应用</b>吧，看来这节真的很重要啊！</p>