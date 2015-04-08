<p>真没想到，一个小小的注册登陆程序竟然出了这么多bug，这次真是脸丢大了。</p>
<p>先来看看sql注入是怎么回事，其实利用欣欣的密码，确实可以随便一个帐号就能登陆，这个密码被称作万能密码，比如用户名填notexist，密码填11' or '1'='1，那么最终执行的sql语句就变成：select * from test where username='notexist' and passwd='11' or '1'='1';，这样的话'1'='1'永远是真，也就全都选出来啦，比较靠谱的方法是，先根据用户名选出记录，再判断密码对不对，这样可以防止sql注入。</p>
<p>然后我们来看看session是怎么回事，其实session是服务器为每个会话保存的一小块内存，那么什么是会话呢？简单说，就是我们打开一个浏览器，去访问一个网站，这就是一个会话，直到我们关闭浏览器为止。</p>
<p>我们来做一个实验：做三个页面，put_session.php往session中放东西，get_session.php获取session，clear_session.php清除session，代码如下：</p>
<p>put_session：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case01/put_session.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/12php/resources/case01/put_session.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>get_session：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case01/get_session.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/12php/resources/case01/get_session.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>clear_session：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case01/clear_session.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/12php/resources/case01/clear_session.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>先访问get_session，会发现一开始没有session，再访问put_session，这时向session中放入了东西，这时再访问get_session，就看到东西啦，要想清除session，就访问下clear_session，然后再刷新get_session，东西又没啦。</p>
<p>注意，在php中操作session，一定要先调用session_start()方法，然后就可以通过$_SESSION来操作session了。</p>
<p>这下我们就可以修复原来的3个bug啦，修复后的代码如下：</p>
<p>login.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case02/login.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/12php/resources/case02/login.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>register.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case02/register.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/12php/resources/case02/register.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>welcome.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case02/welcome.php")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>handler.php：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/12php/resources/case02/handler.php")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>写后台一定要注意跳转的控制和逻辑，后台最容易出bug，特别是有用户输入的地方，要判断各种情况，很多黑客就是通过输入的时候输入一些特殊东西，破解后台的。</p>