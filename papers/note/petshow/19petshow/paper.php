<p>说到后台管理系统，肯定要有登陆呀，为了简化，我们先把管理员的账号和密码固定下来，都设为admin。</p>
<p>那么后台管理就有几个事情要做了，首先是登陆逻辑，未登陆的用户肯定是要跳登陆的，不能让他进入后台，这段逻辑我们之前是练过的。然后就是进来之后的图片上传，这个也是练过的，然后就是日志的提交，其实都是之前会的，就看怎么把它串起来了。来看看代码：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/19petshow/resources/admin.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/petshow/19petshow/resources/admin.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>首先，我们随便加了个登陆的样式，这里我们用了一个vertical-align: top;，这个属性指定input应该如何垂直对齐。然后我们根据session和参数来判断，如果有session或者有post参数，而且用户名密码正确，就让它登陆成功，否则还是显示登陆框。</p>
<p>登陆进去之后，首先是取出title放在option中，这对于我们来说已经易如反掌，然后要做的是添加Title的功能，在option的最后，我们有一个添加，它的value是特殊的-1，在select的onchange中，我们判断select.value ，如果为-1，就用ajax进行请求新Title的添加，这里我们来看下ajax的后台页面addTitle.php</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/19petshow/resources/addTitle.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>然后就是根据选择的option来更新图片了，也是一个ajax请求，但是这个ajax请求得到的是json格式的数据。来看看后台文件getPics.php</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/19petshow/resources/getPics.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>我们选出数据之后用了json_encode($res);将结果json格式化，在js中，我们用JSON.parse(xhr.responseTex t);将结果转为js对象，然后拼出一个字符串lis，通过document.getElementById('pics').innerHTML将它显示在页面上。</p>
<p>然后是上传图片，这里，我们添加一个隐藏的type为file的input，然后用javascript来触发它的点击，这里还用了id选择器为li增加手型鼠标，文件上传和之前的<a href="notedetail-php-14.html" target="_blank">笔记</a>是一样的，这里使用ajax异步上传，我们来看下后台文件uploadPic.php</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/19petshow/resources/uploadPic.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在后台的php文件中，我们给上传上来的文件新取一个名字，注意，这里一定要换个名字，不然张三传一个pic.jpg，李四也传一个pic.jpg，那么就会覆盖张三的图片啦，换名字的策略也很简单，当前时间_1到10000的随机数，这样就很难重名了。我们通过get方式将titleId传过去，然后我们把相关信息插入数据库就好了。实际项目的路径可能和代码路径不一样哈，请自行理解并修改路径。</p>
<p>最后就是日记的提交了，title是很简单就能拿到的，content却要经过处理，把用回车符分割的段落用&lt;p&gt;包起来，short_content更是要从content中提取前100个字，来看看后台代码uploadBlog.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/petshow/19petshow/resources/uploadBlog.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>就这样，整个后台管理的功能全部实现了，但是试了试，好像有不少问题啊，这网站经得起考验吗？</p>
<p><b>本文的代码放在<a href="https://github.com/channingbreeze/petshow/tree/admin" target="_blank" rel="nofollow">这里</a>，欢迎大家下载！</b></p>