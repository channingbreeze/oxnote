<p>先来一发数据库集成环境，让我们操作数据库更方便，网上有很多，我用的是<a href="http://dev.mysql.com/downloads/workbench/" target="_blank" rel="nofollow">Mysql Workbench</a>，网上有教程，可自行百度。</p>
<p>首先先建一个库吧，然后在建一个test表，表中有三个字段，一个id主键，一个username和一个passwd，然后插入两条数据，再选出来看一下，sql如下：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/10php/resources/case01.sql")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这时候我们的数据库就搭好了，数据也有了，可以用php来取数据啦：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("91af67c972", "", str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/10php/resources/case02.php"))));
?>
	</pre>
	<a class="try_button" href="papers/note/php/10php/resources/case02.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>这是一个比较标准的php读取数据库的例子，我们把流程总结一下：1、先调用mysql_connect来<b>连接数据库</b>；2、然后mysql_select_db，<b>选择数据库</b>；3、mysql_query就是<b>执行sql指令</b>；4、mysql_fetch_assoc是从得到的$res中<b>取出一行</b>；5、mysql_free_result将$res<b>资源释放</b>；6、mysql_close<b>关闭数据库连接</b>。</p>
<p>在这个程序中，我们最终把数据封装成了一个数组。然后我们用var_dump就可以将数组打印出来，当然，最终我们的数据不是这样展现，但是我们经常用这种方式调试。还有就是die这个函数，顾名思义，它是使进程退出，如果执行了die函数，那么程序到此为止。</p>
<p>这里只是为大家介绍了查操作，其实增删改也都是用mysql_query来实现的。由于数据库操作十分频繁，所以我们可以专门<b>封装一个类</b>来进行数据库操作：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("91af67c972", "", str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/common/SQLHelper.class.php"))));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>当然这里涉及到一些面向对象的知识，不过很简单，__construct是构造函数，也就是创造类的时候，系统会去执行的函数，__destruct是析构函数，也就是销毁类的时候，系统会去执行的函数，用private修饰的函数或变量是私有的，外部不能访问，用public修饰的函数或变量是公有的，外部可以访问。</p>
<p>我们在外部就这样使用：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/php/10php/resources/case03.php")));
?>
	</pre>
	<a class="try_button" href="papers/note/php/10php/resources/case03.php" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>首先我们用require_once引入类文件，require_once可以保证只会引入一次文件；第二句就是创建类，这时候会去调用类的构造函数__construct，然后我们调用execute_dql_array获取数据，函数内部已经为我们封装好的实现，最后打印数据。</p>
<p><b>有了SQLHelper，我们操作数据库就简单很多了</b>。</p>
