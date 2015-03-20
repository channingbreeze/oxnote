<p>说到文件上传，其实我很快就能想到type=file的input标签，不过不知道后台要怎么接收，不过还好，在php中接收文件是很简单的事情。</p>
<p>看个例子，当然涉及到两部分，前端的web.php和后台接收的upload.php</p>
<p>upload.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/14php/resources/case01/upload.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>web.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/14php/resources/case01/web.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/14php/resources/case01/web.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这段代码解释一下：在web.php中，使用form提交，上传文件，一定要加上enctype="multipart/form-data"，这样一句。这样文件信息就到了$_FILES里面，即使你后台什么都不写，文件会自动保存在$_FILES['pic']['tmp_name']路径下面，我们用is_uploaded_file可以判断文件是否是上传上来的，如果是的话，通过move_uploaded_file将它移动到我们需要的地方就行了，在upload.php中，我还做了一个文件大小检查。</p>
<p>php文件上传就是这么简单，但是有时候你还是会发现一些异常，特别是大文件，原因可能是在php.ini文件中，有两个配置项，upload_max_filesize表示能够上传的最大文件大小，post_max_size 表示post请求的最大限制，这两个都会限制文件大小。至于php.ini在哪里，你到wamp安装目录搜一下php.ini就能找到啦。</p>
<p>但是这样的效果不能满足我们的要求，为什么呢？因为没有进度，这是要命的极差用户体验，不能忍。来看看进度怎么搞，这就要用到ajax技术了，不过带进度的功能只有在比较高级的浏览器才能看到哦！</p>
<p>web.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/14php/resources/case02/web.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/14php/resources/case02/web.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>ajax上传文件就没必要form表单了，也没必要点击上传了，我们监听input的onchange方法，这样我们选完文件就直接上传了。var fd = new FormData();和fd.append(this.name, this.files[0]);是封装了一个FormData对象，最后就是把这个对象通过post方式发送出去。与之前的ajax不同，这次我们监听xhr.upload.onprogress，这就是进度所在，进度在参数中，percent = 100 * ev.loaded / ev.total;就能计算出百分比。</p>
<p>文件上传是非常常用而又非常重要的，老版本的浏览器要实现进度是很麻烦的，而新版本的浏览器却很方便。</p>