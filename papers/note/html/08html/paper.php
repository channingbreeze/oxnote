<p>主要有五个知识点，一一道破，首先是<b>监听键盘事件</b>：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case01.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case01.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>按键相关的东西就是三个：document.onkeypress、document.onkeydown、document.onkeyup，分别表示字符按键、按下和弹起，键的信息都在参数e中，onkeypress只有按到字符键才有效，onkeydown和onkeyup基本对所有键都有效，所以贪吃蛇的上下左右用onkeydown就好。</p>
<p>接下来是每隔一定时间就触发动作，其实专业术语叫<b>定时器</b>：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case02.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case02.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这里的重点是setInterval函数，第一个参数是回调函数，第二个参数是时间间隔，单位ms，这个函数会返回一个timer，代表定时器，当我们要取消定时器的时候，就调用clearInterval，将setInterval返回的timer作为参数传进去。还有就是可以通过设置元素的disabled为true或false来控制按钮的可点击状态。</p>
<p>再接下来就是<b>随机数</b>了，这个也很简单：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case03.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case03.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>Math.ramdon产生0~1之间的随机数，但是是小数，要把它变成1~100的整数，只需要乘以100，再向上去整就好了。</p>
<p>然后是二维地图的实现：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case04.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case04.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这里用了一个relative的div作为map，然后里面蛇和食物都是absolute的div，移动的时候只要设置它们的left和top就行了。注意这里的样式设置，.snakehead, .snake, .target就可以设置.snakehead、.snake和.target的公共样式。</p>
<p>最后是动态添加蛇身：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case05.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case05.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>首先我们用document.createElement来创建一个div，然后设置它的一些属性，最后用document.getElementById('map').appendChild(newNode)，把它加到map中，这样就动态添加了一个div。</p>
<p>好了，基本的知识点都已经打通，接下来就打大BOSS了：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/html/08html/resources/case06.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/html/08html/resources/case06.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这里用了snake作为一个数组，每个元素是一个div的Element，然后就是游戏结束的条件，有两个，一个是蛇碰到墙壁，一个是蛇碰到自身，主要逻辑就是蛇吃到食物的时候，蛇身要变长，然后食物随机换一个位置，当然不能与蛇身重合。当然游戏的细节比较多的，可以结合代码理解。</p>
<p><b>这个游戏调了两天，虽然规则很简单，但是细节还是需要花费精力的</b>。</p>