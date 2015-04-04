<p>既然要好好测一测，那么就重新建一遍数据库先，看看一开始的网站是什么样的。</p>
<p>首页正常、图片页正常、日记页正常，管理页，完了！一开始没有pic_title，是不能够添加图片的，不然图片添加到哪个title下呢？还有，一开始没有pic_title，下拉框中只有一个添加的option，没法响应select的onchange。这可是个不得了的bug，赶紧偷偷地修了吧！</p>
<p>首先，在显示pic的div这里，加上判断，如果picTitles不为空才显示。由于这里的div可能不显示，所以涉及到div里面元素的操作都需要加上判断。</p>
<p>然后是select的绑定函数问题，可以改成onclick，这样就能响应了，但是这样会响应两次，虽然功能正常，但是对于处女座的同学来说，还是不完美的，而且在选择了添加之后，再点击，还是会添加，也是有bug的。其实这是一个设计问题，添加Title应该单独作为一个按钮，而不应该作为select中的一项，但是如果真的碰到这样的变态需求，我们可以判断一下select中的option数量，再做决定，这样就比较完美地解决问题了。</p>
<p>这时候，添加title没问题了，但是再添加一个title，却发现，下面的图片div中的title没有跟着变，这里也要改一下。我们在getPics中将title也返回来，在ajax中修改了title。同样，我们在添加title成功之后，不再刷新页面，而是局部更新，更改addTitle.php，成功的时候返回刚刚插入的title的id，这里用到了SQLHelper中的getLastInsertedId，它就是用来返回最近插入记录的id。</p>
<p>还有一个小问题，我们在登陆之后，你看看地址栏，多了一个#号，这是因为我们form表单中的action填了#，把它去掉，这个bug也修掉了。</p>
<p>我们来提交日记看看，输入一个中文日记，唉，日记摘要的…怎么没出来，我们在php中打印sql语句，然后在ajax中用console.log将返回数据xhr.responseText打印出来，在chrome的控制台可以看到，里面有一个奇怪的字符，这是中文造成的，解决办法是用mb_substr代替substr。</p>
<p>插了5条日记了，怎么才两篇，在blog.php里sql写错了，改一下。</p>
<p>在第一个title里面插入4个图片，再插入两个title，页面就乱掉了，我们需要将九宫格定宽高，改下style。</p>
<p>我们发现blog_detail.php页面的文字间距有点挤，来改一下它的style。</p>
<p>还有日记页和首页的短标题似乎也不是很漂亮，也来改一改。</p>
<p>然后我们发现在blog.php中，如果摘要是一长串英文就没有换行，这是因为系统会把一长串英文当成一个单词，我们在style中加上word-wrap: break-word;就可以解决。</p>
<p>清空数据库再来测一遍，发现第一次添加title时没有刷新页面，这里我们改为reload()。这样一来又发现一个问题，增加title时，select中的option并没有更新，这里我们也可以写个ajax更新一下。我们增加一个接口getTitles.php，返回titles，在ajax中更新option，对我们来说不是难事。</p>
<p>输密码的时候输了一个错误的，竟然也登陆进去了，原来是密码判断的地方写错了，赶紧改一下。</p>
<p>更改过的页面分别为：</p>
<p>admin.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/admin.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/20petshow/resources/admin.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>addTitle.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/addTitle.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>getPics.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/getPics.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>uploadBlog.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/uploadBlog.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>blog.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/blog.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/20petshow/resources/blog.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>index.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/index.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/20petshow/resources/index.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>blog_detail.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/blog_detail.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/20petshow/resources/blog_detail.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>getTitles.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/20petshow/resources/getTitles.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>没想到一个小小的项目，尽然有这么多bug，难怪欣欣这么重视测试了。当然，如果你有更加严格的要求，可以自行测试修改，测试是无止尽的！</p>
<p><b>本文的代码放在<a href="https://github.com/channingbreeze/petshow/tree/fixbug" target="_blank" rel="nofollow">这里</a>，欢迎大家下载！</b></p>