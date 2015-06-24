<p>为什么我们用this定义的变量会变成公有变量呢？我们先来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/38javascript/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case01/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，第一种方法，我们定义了一个xinxin的对象，给了他一个name的属性，这时候我们的xinxin就有了name这个属性，这是很好理解的。但是这里的第二种方法，为什么xinxin也能有name这个属性呢？关键在于new Person，在javascript中，new关键词做这样几件事情：1、创建一个新的对象，这个对象的类型是Object；2、使用新对象调用构造函数；3、返回新对象。那么在调用构造函数时，里面的this就是新创建出来的object。还没懂？没关系，看看第三种方法，就是第二种方法的翻译版本。</p>
<p>如果你还没有理解this是什么，我们再来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/38javascript/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case02/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们首先定义了一个function叫做printName，它打印出this.name。那么这里的this是什么呢？此时我们并不知道，<b>要看谁来调用这个函数，谁调用这个函数，谁就是this</b>。紧接着我们直接调用了printName()，那么这时候是谁在调用函数呢，是系统的默认对象window，window没有name这个属性，所以第一行打印出来空。然后我们为window定义一个name属性，这时候就能打印出来了。紧接着，我们定义了一个变量xinxin，给了他一个name，如果我们直接调用xinxin.printName，那么会报错，原因很简单，xinxin没有printName这个方法。但是apply可以让我们以xinxin的身份，调用printName。注意apply是Function的一个方法。printName.apply(xinxin)这句话的意思是，以xinxin的身份来调用printName，故printName里面的this就是xinxin，而xinxin有name，所以能够打印出来。</p>
<p>关于apply，我们再来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/38javascript/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/38javascript/resources/case03/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们定义了一个add方法，它是有参数的。首先我们直接调用add方法，从结果可以看出，this.name是没有值的，原因大家应该都能知道了。然后我们定义一个xinxin这个变量，想用它来调用add方法，并且传递参数，这里我们首先用了apply，参数是已一个数组的形式传递进去的，然后我们用了call，参数是依次传递的。其实call和apply基本一样，不一样的地方就在于参数的传递方式。</p>
<p>通过这节的学习，大家应该知道this到底是怎么回事了，妈妈再也不用担心我会晕this了。</p>
