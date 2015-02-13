<p>看一下上一节笔记中的一点问题，用两个类解决，一个类表示公共样式，另一个类表示特有样式，代码量一下子减少很多，看例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/05html/resources/case01.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/05html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>好了，接下来看一下table的一些用法：table还是有很多细节的，先来看个简单例子</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/05html/resources/case02.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/05html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，首先要知道，tr代表table中的一行，th和td都是代表一个单元格，不同的是，th被用来代表表头，td则是普通单元格。然后table中可以设置border，cellspacing，cellpadding和align，这几个比较常用，cellspacing是代表表格线与线之间的间距，而cellpadding是代表文字与表格线之间的间距，试一试便知。tr、th、td都可以设置width和height，而且width的影响范围是一列，height的影响范围是一行，也可以设置align，在tr中设置align是作用在一行，在th或td中设置align则是作用在一个单元格。</p>
<p>下面来看个和表单结合的例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/html/05html/resources/case03.html"));
?>
	</pre>
	<a class="try_button" href="papers/note/html/05html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这里面基本包括了常用的表单元素，这个例子有一些知识点要记录一下：1、input可以用placeholder来指定提示信息；2、几乎每一个input都有一个name属性，这个属性就是与后台交互的媒介哦，怎么说呢？请点击提交按钮，再看看浏览器地址栏的url，是不是有变化呢？是的，表单提交了；3、表单提交到哪里去了呢？这取决于form中的action属性，这里制定的是#，表单提交给本页面；4、表单还有一个重要属性method，一般取值get或者post，这是两种提交方式，如果是get，那么提交的数据就会在url中显示，就如我们看到的，如果是post，数据不会在url中显示，但是也提交到后台了。</p>
<p>关于表单的知识，要结合后台才能够理解透彻，不过这里也算是提到很多了。</p>