<p>其实最后两个知识点是很简单的，只是自己没想到而已。</p>
<p>第三个场景的出现用一个end的自定义动画就能搞定，延迟15s播放而已。然后再给body来个黑色背景，再多加几个地鼠，增加点难度，游戏就可以玩起了。</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/35susliks/resources/case01/index.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/susliks/35susliks/resources/case01/index.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>css：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/susliks/35susliks/resources/case01/style.css")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>虽然用了比较绕的方法实现了游戏，但是里面的知识点是可以在实际中用上的，而且很多css的技巧也在里面了，收获颇丰。</p>
<p>经过测试，在safari里面有一个不小的bug，点击地鼠后，地鼠不会钻下去，而是停在原位，这严重影响了游戏的运行，我们用了一个hack技巧，在uncheck的时候我们设置地鼠透明度为0，只有在checked的时候透明度是1，这样就解决了safari中的问题，也不会影响在其他浏览器的运行情况。</p>