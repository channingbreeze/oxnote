<p>说到用户请求，就很快想起了之前学<a href="notedetail-html-5.html" target="_blank">表单</a>的时候有提到过两种提交方式，get和post两种方式，可以用$_GET和$_POST来接收，先看看get请求的例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case01.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/11php/resources/case01.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>get请求的特点是参数会放在url中，所谓url就是浏览器地址栏的网址啦。所以我们直接修改url，比如<a href="papers/note/php/11php/resources/case01.php?param=123" target="_blank">http://www.calfnote.com/papers/note/php/11php/resources/case01.php?param=123</a>就能看到效果啦，问号后面的param=123就是get的参数。注意，代码中的isset方法可以判断参数是否存在。</p>
<p>那么post请求如何发出呢，这就要用到表单了，再来看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case02.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/11php/resources/case02.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>我们设置表单的method为post，这样我们就能够根据表单中元素的name来接收参数了，还是很简单的。注意，这里表单的action没填，默认是提交到本页面，提交到其他页面就填上相应的地址就行。</p>
<p>那么我们就来看看登陆和注册要怎么做吧，首先，我们需要三个页面，一个登陆页login.php，一个注册页register.php，还有一个登陆和注册成功的跳转页welcome.php，而且，我们还需要一个处理请求的页面handler.php，登陆的时候，我们拿到用户名和密码，去数据库中判断一下是否存在该用户，如果存在就登陆成功，否则提示登陆失败，注册就是在数据库中增加一条记录，Come on，看看代码：</p>
<p>login.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case03/login.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/11php/resources/case03/login.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>register.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case03/register.php"));
?>
	</pre>
	<a class="try_button" href="papers/note/php/11php/resources/case03/register.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>welcome.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case03/welcome.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>handler.php：</p>
<div class="code_div">
	<pre>
<?php
	echo htmlspecialchars(file_get_contents("papers/note/php/11php/resources/case03/handler.php"));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>注意，在表单中，我们用到了type=hidden，这种控件不会在页面上显示，但是它放在表单中却能够将一些参数带过去，这里我们就是通过它传递type参数，value为login表示是从login.php中请求过来，value为register表示是从register.php中请求过来。这样在handler.php中就能够判断啦，handler.php里面的逻辑不解释了，需要注意的是，header("Location: login.php");可以跳转到其他页面。</p>
<p>好了，虽然页面有点挫，但是现在是学习后台，弄清楚跳转控制就行了，有时间再来好好做做前端，一个网站就ok了。</p>