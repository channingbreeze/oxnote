<p>AJAX全名叫做Asynchronous Javascript And XML，读作阿贾克斯，喜欢足球的同学是不是兴奋了呀？</p>
<p>多说无益，先来个例子大家看看，不过ajax技术涉及到前端和后台，所以要两个文件，后台返回数据的文件叫data.php，前端展示文件叫web.php，来看看代码：</p>
<p>data.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/13php/resources/case01/data.php")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>web.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/13php/resources/case01/web.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/13php/resources/case01/web.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子要详细解释一下，首先来看data.php，file_exist方法可以判断一个文件存不存在，file_get_contents可以读取文件的内容，file_put_contents可以向文件写入内容，所以data.php的逻辑就是从文件中读出num，然后加一，再存入文件，初识时num为0。这个php文件，你可以通过浏览器输入路径直接访问，但是我们要用ajax来访问。</p>
<p>再来看web.php，关键是refresh函数，它就是ajax，xhr = new XMLHttpRequest();，是初始化一个ajax对象，xhr.open("GET", "data.php", true);，是设置使用get请求data.php，异步的，xhr.onreadystatechange = callback;，是设置回调函数，也就是当数据请求到时，会调用的函数。xhr.send(null);，这是发送请求。同样重要的还有刚刚设置的回调函数callback，如果xhr.readyState为4而且xhr.status为200，表示我们请求成功，返回的数据在xhr.responseText中，这时候我们可以使用javascript去更新我们想要更新的元素。怎样，是不是很酷？</p>
<p>我们来看看注册界面怎么使用ajax技术实现无刷新请求。我们需要改一改register.php，还要新增一个接口checkuser.php。先看看代码：</p>
<p>checkuser.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/13php/resources/case02/checkuser.php")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>register.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/13php/resources/case02/register.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/13php/resources/case02/register.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>在checkuser.php中，我们按照username来查纪录，如果有纪录则返回false，表示用户名已存在。</p>
<p>在chechuser.php中，我们使用post方法来请求，与get不同的是，需要加上xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");，这一句来设置请求头，另外就是在xhr.send中传递参数。其他处理逻辑类似啦，需要注意的是，onblur是输入框控件失去焦点的事件，也就是我们点击输入框，输入用户名后，再点击别的地方会触发的事件，这里我们正好可以判断用户名是否已存在。另外就是我在注册按钮加了onclick="return false;"，这样就可以禁止表单提交，因为表单提交不是这节的重点，上节已经讲过了。</p>
<p><b>AJAX是非常重要的技术，它不仅可以提高用户体验，而且可以节省用户带宽，是开发WEB的必备技能</b>。</p>