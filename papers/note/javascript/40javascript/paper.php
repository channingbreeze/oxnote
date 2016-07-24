<p>要做俄罗斯方块，先来对我们的游戏进行一个规划。首先，游戏要包含一个俄罗斯方块的游戏区，是一个10X20的矩形区域，然后旁边有一个区域提示下一个方块是什么，同时还有计时和计分。计分规则如下：同时消灭一行得10分，两行得30分，三行得60分，四行得100分。我们通过上下左右和空格来控制方块的移动，上表示旋转，下表示下移一行，空格表示直接下落，左右就不说了。</p>
<p>首先，我想先把界面做出来，看看效果才有心思做逻辑呀！</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/40javascript/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case01/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>思路其实比较明确，我们希望操作数组，然后把数组渲染成界面，也就是可视化，我们用到的是refreshxxx函数，这样，在每次改变数组的时候，调用refresh函数就ok了。Div还是用绝对布局，三种样式表示了div块的三种状态。但是看看代码，其实冗余度挺大的，我们来改写一下，做点面向对象该做的事情吧！</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/40javascript/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case02/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>script.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case02/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>game.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case02/game.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们基本实现了游戏的逻辑。首先，我们抽象出来一个SquareGame类，放在game.js里面，所以在script.js中，代码出奇地少。但是在game.js中代码却十分复杂。首先，我们将7种方块定义成一个数组，然后，我们把initDiv和refreshDiv的公共逻辑抽取出来，接着，我们实现了方块的旋转、左移、右移和下移，最后在每次方块下移的时候，我们判断能否下移，不能的话，方块就固定住了，然后检查是否可以消行，是否游戏结束。</p>
<p>但是这个版本还有一些bug，比如旋转的时候，行为比较奇怪，计时和计分没有，没有较好的操作提示等等，而且game.js的代码比较多。对于旋转，其实没必要用算法，我们自己定义一些旋转的矩阵就行了，而且也应该分出一个方块类，然后让七种方块去继承这个类，将代码结构调整如下：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/40javascript/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>script.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>game.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/game.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square1.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square1.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square2.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square2.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square3.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square3.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square4.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square4.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square5.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square5.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square6.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square6.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>square7.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case03/square7.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这里，我们完成了所有逻辑，不过文件也变得多起来了，但是结构却清晰很多。首先，我们把方块的所有操作封装在Square中，一些大家都要用的方法封装在prototype中，而每个Square都要使用的属性封装在this中。然后，我们定义了Square1到Square7，从Square继承下来。注意，这里用this.square = Square;this.square();实现了对象继承，用Square1.prototype = Square.prototype;实现了原型链继承，这样，Square的所有东西都继承下来了。而每一个方块特有的东西就是旋转，所以我们为每一个方块定义了旋转矩阵。然后在Game中，我们实现了计分和计时，这部分比较简单，应该很容易看懂。在实现过程中，有一个比较麻烦的地方就是判断数据是否有效，这个操作应该放在Game中还是Square中呢？其实都有点麻烦，因为这个操作涉及到这两个东西，我们这里采用的方法是，将操作放在Square中，然后将Game中的方法作为参数传递过来。个人觉得这样可以比较好地解决这个问题。</p>
<p>在这里，我们最重要的是使用到了js的继承，下面单独拿出来看看。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/40javascript/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>script.js：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/40javascript/resources/case04/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>js中继承最重要的就是this.stu = Student;this.stu(name, age);了，首先，我们定义一个this.stu，让它等于Student这个function，然后调用它，注意，这时候是以this身份去调用它，然后把它里面的属性全都拿过来了，相当于实现了继承。</p>
<p>这个游戏说实话是有一定难度的，大家可以好好理解。</p>