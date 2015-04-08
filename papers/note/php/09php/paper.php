<p>其实上网查了资料之后，wamp安装挺简单的，只是有几个概念刚接触还不太懂。一个是Apache，这是一个<b>Web服务器软件</b>，使用量目前排名第一，很厉害；一个是PHP，这是一门通用开源<b>脚本语言</b>，用于编写后台；一个是MySQL，它是一个<b>关系型数据库</b>管理系统，说白了就是数据库。</p>
<p>这几个概念搞懂了，也按照网上说法装好了wamp，那么就可以开始玩了。不过要注意，装wamp的时候，我们设置了MySQL的用户名和密码，这个可得记住，不然我们自己都进不去，目前还没用到数据库，这部分先忽略，但是，记住用户名和密码！</p>
<p>启动wamp很简单，关键是wamp中有个www目录，我们把之前的贪吃蛇小游戏放在这里面就可以啦，假设叫snake.html，那么我们在浏览器中输入：127.0.0.1/snake.html，应该就能看到小游戏了。</p>
<p>在网络世界里，127.0.0.1是本地ip地址，所以以上url就能访问到我们的页面啦，当然这是在我们启动了apache的前提下，不信你把apache关了再试试。</p>
<p>好了，我们来试一下php语言，先找个入门例子：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/09php/resources/case01.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/09php/resources/case01.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这个例子真够简单，其实echo就是输出的意思，就是在前端输出了&lt;h1&gt;PHP&lt;/h1&gt;和&lt;p&gt;Hello World!&lt;/p&gt;，但是这个例子没有意义，前端html直接就能写，那php的意义在哪里呢？再看个例子：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/09php/resources/case02.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/09php/resources/case02.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这是一个典型的html和php混编，最终输出到前端的是ul和li元素，但是数据却是从php的array中来的。</p>
<p>其实php的数据基本都是从数据库里面来的，php的作用是<b>从数据库中取出数据，然后将它展现给前端</b>。当然还有一个作用就是<b>接收用户的请求，并且生成响应的页面</b>。</p>
<p>说实话觉得php很神奇，但是它的原理还是比较简单，apache会判断一个页面是否是php页面，如果是，则先执行里面的php脚本，生成结果，然后再将其与混编的html一齐输出到前端，展现到用户面前。</p>
<p>好了，这就是php，基本算是入门了。</p>