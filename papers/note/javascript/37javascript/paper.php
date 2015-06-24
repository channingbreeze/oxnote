<p>首先，我们先来总结一下javascript定义对象的几种方法：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/37javascript/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case01/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这里，我们总结了三种方法。第一种方法，也是最简单的一种，一种类似json格式的定义，就能产生一个对象。第二种方法其实我们是见过的，通过一个函数来创建对象。第三种方法是先new一个Object，然后再给它赋值，也是一种方法。其实在javascript中，对象就是Object，也就是说，第三种方法是最原始的，但是并不常用。第一种方法和第二种方法是最常用的，因为它们用法简单。而它们两者的区别是，第一种方法一次只能定义一个对象，第二种方法相当于定义了一个对象的模板，通过new我们可以定义很多结构相同的对象。在实际编程中大家要尽量使用第一种或者第二种方法。</p>
<p>那么我们所说的prototype是什么东西呢？就是我们在通过第二种方法来定义对象时需要注意的一个东西。我们来看一个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/37javascript/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case02/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们有三种方式定义属性或方法，第一种是最熟悉的通过this来定义，第二种是通过Person来定义，但是注意，通过new Person出来的对象是没有这些属性和方法的，第三种是我们的重点，通过Person.prototype来定义，它的使用方式和第一种是一样的。</p>
<p>关于prototype，有这么一句话：做为一个对象，当你访问其中的一个成员或方法的时候，如果这个对象中没有这个方法或成员，那么Javascript引擎将会访问这个对象的prototype成员所指向的另外的一个对象，并在那个对象中查找指定的方法或成员，如果不能找到，那就会继续通过那个对象的prototype成员指向的对象进行递归查找，直到这个链表结束。</p>
<p>这就是为什么我们new出来的对象能够访问prototype上定义的属性。而且每个对象都有prototype这个属性，这个属性本身又是一个对象，它也有自己的prototype，这样就形成一个链，这也就是原型链的意义。</p>
<p>既然prototype和this这两种方法都能定义属性和方法，那他们就没有区别吗？当然有。使用prototype定义的属性和方法所产生的内存消耗要小很多，它在内存中只有一份，都有的对象只保留它的引用，而this定义的属性和方法，每个对象都会保留一份，所以消耗内存较大。</p>
<p>这么说可能大家不理解，举个例子说明一下，比如你定义了一个Person，里面有一个方法叫getAge，然后new了100个Person，如果是用this定义的getAge，那么这100个Person，每一个都要在内存中生成这个getAge，但是如果是用prototype定义的，那么内存中只有一份getAge，100个Person会有100个prototype，但是这些prototype都指向一个getAge。</p>
<p>再举个生活中的例子，比如我们搞一个调查问卷。this方式就好像是我们发纸质版的，发100份，就得打印100份纸质版。而prototype方式就好像是网上调查问卷，我只要给100个人网址就好，他们上来都能访问调查问卷，而这个调查问卷在服务器只有一份。</p>
<p>说了这么多，prototype比this好很多，那为什么不直接用prototype呢？this的存在岂不是没有意义了？非也非也！prototype也有不如this的时候，请看例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/37javascript/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/37javascript/resources/case03/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们的age变量变成了function中的一个var，这时候我们在prototype中就无法去操作这个age了，只有通过this定义的方法才能操作。这里的var变量可以说是私有变量，只有Person这个function里面的元素能够操作，外面的元素无法操作，prototype也不行。</p>
<p>好了，这节详细分析了prototype的一些基础知识点，要成为javascript高手，prototype一定要搞定。</p>