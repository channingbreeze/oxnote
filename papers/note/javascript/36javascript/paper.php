<p>Javascript之前也看过，但是只会一些简单的功能，这次要系统地学习一下了。</p>
<p>首先我们来看看怎样把javascript分离开来：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/36javascript/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case01/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在html中，我们用script标签引入javascript，用src属性指定其路径。这样就将javascript引入进来了。在js中，我们用document.write向DOM中写点东西。</p>
<p>但是这个例子就是典型的面向过程编程，顺序执行，代码没有结构可言。那么面向对象的代码会是什么样子呢？我们来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/36javascript/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case02/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个例子运行效果和上一个例子一模一样，但是代码结构明显好很多。首先我们定义了一个Animal的对象，它有几个属性，name、food、hobby、skill，这些属性可以从外部传入进来，然后Animal还提供一个write方法，用来将信息输出。客户端使用的时候，通过new Animal就可以创建这个对象，将参数传入进去，然后就可以调用其write方法。这样的好处是明显的，代码分工明确，而且也减少了冗余代码，维护成本大大降低。</p>
<p>Javascript还有很多内置对象，比如说我们之前用过的Math.floor，Math就是一个内置对象，它有floor函数，还有哪些内置对象呢？我们来看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/36javascript/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case03/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个例子向我们演示了数组的用法，[]就是一个空的数组，我们可以通过push向里面添加数据，也可以通过pop取出数组尾的数据。当然这个例子没有任何意义，在这里我只想说明javascript中的对象概念。其实在javascript中，数组是Array对象，而这个Array对象就是javascript中的<b>内置对象</b>，所谓内置对象，就是javascript帮我们定义好的一些对象，我们直接用它的方法就好。其实我们之前用到的document、window，都是内置对象，这些对象我们并没有定义，直接拿来用。</p>
<p>如果你细心，就会发现Array的方法和Math的方法是不一样的，Array的方法是通过var arr=[]，我们定义了一个Array的对象变量，而Math的方法可以直接通过Math来用，如Math.floor，所以这里我们有两类方法，一类是需要先定义一个var才能用的，一类是可以直接用的，变量也是分这两类。这两类有什么区别呢？我们来看一下：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/36javascript/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/36javascript/resources/case04/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>大家应该发现这里面的逻辑bug了吧，xinxin长了一岁，玩命牛也变成了19岁。这就是因为age这个变量是属于Person的，xinxin和wanmingniu都是从Person创建出来的，他们共享了Person的这个age变量，就造成了错误。而name确不会共享，那是因为this变量的缘故，关于this变量，我们还会详细了解，这次我们先有个大概的概念即可。</p>
<p>这次我们学习了一种很重要的思想，尽量将代码组织成对象，维护起来更简单。</p>