<p>正则表达式是一种专门用来处理字符串查询、匹配等等的工具，它非常灵活，非常强大，并非只在javascript中可以用，它在大部分语言中都能用，是一种跨语言的工具。没看懂？没关系，来个例子瞅瞅先：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case01/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/39javascript/resources/case01/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case01/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，有这样一句话var reg = /^(\d){11}$/gi;，这就是正则表达式，但是我相信一开始接触的人绝对看不懂这是什么。我们的目标就是要把它搞懂。</p>
<p>首先我们来解释一下这个正则表达式的意思，它是匹配一个11位的数字串，\d表示数字，{11}表示重复11次，所以(\d){11}表示11位的数字，^匹配字符串的开始，$匹配字符串的结尾，也就是说第一个字符就必须是数字，最后一个字符也必须是数字。如果没有^和$，那么a12312341234b也能被匹配，但是它显然不是手机号。而//gi则是定义正则表达式的写法。</p>
<p>说到这里呢，相信大家已经有一些明白了，然后我们再来看看常用的一些字符：</p>
<p>常用的元字符：</p>
<p>. 匹配除换行符以外的任意字符</p>
<p>\w 大小写字母、数字或者下划线</p>
<p>\d 匹配数字</p>
<p>^ 匹配字符串的开始</p>
<p>$ 匹配字符串的结束</p>
<p>注意，如果要匹配以上元字符，需要转义，比如：\\能匹配\，\.能匹配.。</p>
<p>常用的限定符：</p>
<p>* 重复0次或多次</p>
<p>+ 重复1次或多次</p>
<p>? 重复0次或1次</p>
<p>{n} 重复n次</p>
<p>{n,} 重复n次或更多次</p>
<p>{n,m} 重复n到m次</p>
<p>范围：[aeiou] 匹配aeiou中的任何一个字符</p>
<p>反义：[^aeiou] 匹配除了aeiou的任何一个字符</p>
<p>并列：wanmingniu|xinxin 匹配wanmingniu或者xinxin</p>
<p>说了这么多，可能也不是特别清楚，还是来一个案例好：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case02/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/39javascript/resources/case02/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case02/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>这个例子的信息量很大，我们一点一点分析。首先，我们用到了getElementsByTagName这个函数，它可以根据标签得到html的tag，返回的是一个数组，需要我们根据索引获取其中的元素。其次，我们用getAttribute这个函数，得到标签的属性。最后，我们用new RegExp(regStr)定义了正则表达式，这种方法和//gi的效果是一样的，唯一的好处就是我们可以传一个字符串进去，而//gi是不行的。</p>
<p>我们注释掉的代码，也许是初学者最容易犯的错误。如果那样写，在onclick中，regStr永远是最后一个，为什么呢？原因有两点，第一、onclick只有在点击时才触发，第二、javascript变量在花括号{}内，是不会有多个实例的。也就是说，在for循环内，regStr自始至终就是一个实例，它经历了整个for循环，最终它的值就是最后一个。所以在onclick触发的时候，所有的onclick中的regStr都是最后一个。（如果不知道这里在说什么，请动手试一试便知）</p>
<p>那么我们有什么方法解决它呢？很简单，我们把代码放在function()里面，然后再调用这个function就行了。实例代码中我们用了匿名的function，这也就是大名鼎鼎的“<b>闭包</b>”。那么为什么这样就行了呢？原因它破坏了上述的第二个原因。在function中，每一个变量都会有一个实例。这样每一次的for循环，都是自己的实例，所以在onclick的时候，就能够引用到自己的实例，而不是永远最后一个了。（如果这块没懂，不用担心，以后有的是机会碰到类似问题）</p>
<p>好了，解释了这么多之后，我们要来说说正则了。第一个正则很简单，用了一个|解决了或的关系。第二个正则用到了\w来匹配字母数字和下划线，还用到了\.来匹配.，当然，用这个正则来匹配网址是有漏洞的，这里只是简单演示一下正则的用法。第三个表达式比较综合，[1-9]代表1-9的数字，也用到了|，还有括号()。没错，()的用处可大了，来看看下面这个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case03/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/39javascript/resources/case03/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case03/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们用到的正则是^(\w)(\w)(\w)(\w)\3\2\1$，这里出现了\3，\2和\1，它们是什么意思呢？这里就要抛出<b>捕获组</b>的概念了。注意，这个正则里面有4个括号，每一个括号代表一个捕获组，并且依次编号，从第一组到第四组。而\1表示引用第一组，比如，当我们输入abcdcba，那么第一个(\w)匹配到的就是a，这时候\1引用到的也是a，其他的以此类推，这样就形成了回文的判断。</p>
<p>我们再看第二个button的响应。我们用到了reg.exec，这个函数的返回是什么呢？我们把它的返回以JSON形式显示了出来。注意，要把一个Object转换成JSON字符串，只需要用JSON.stringify就行了。这里表明reg.exec返回的是一个数组，数组的第一个元素是被匹配到的字符串，而第二个元素正是第一个捕获组，注意到没？同理，第三个元素是第二个捕获组，以此类推。</p>
<p>捕获组与捕获组的引用，在相同的字符串时十分有用，比如找连续三个相同的字符串，就可以用(\w)\1\1这种正则。而且我们还可以通过reg.exec的返回知道这里的(\w)捕获到的是什么字符。</p>
<p>但是有时候有些捕获组我们可能并不希望获取，这时候就可以使用非捕获组，看个例子：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case04/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/39javascript/resources/case04/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case04/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>在这个例子中，我们匹配紧跟The或者the的四个相同数字，并且给出这个数字。首先来看注释掉的代码，虽然达到了效果，但是其实第一个捕获组我们是不需要的。这时候我们就可以使用非捕获组，注意，我们使用了?:放在pattern（匹配模式）的前面，这样就会把这个组变成非捕获组，然后之前用来匹配数字的\2也变成\1了，因为前面的变成非捕获组了，所以后面的捕获组索引也提前了。</p>
<p>其实在非捕获组中，还有一种更强大的技术叫做前后查找，什么意思呢？来看个小案例：</p>
<p>html：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case05/test.html")));
?>
	</pre>
	<a class="try_button" href="papers/note/javascript/39javascript/resources/case05/test.html" target="_blank">check the result</a>
	<div class="G-Clear"></div>
</div>
<p>javascript：</p>
<div class="code_div">
	<pre>
<?php
	echo str_replace("\t", "&nbsp;&nbsp;", htmlspecialchars(file_get_contents("papers/note/javascript/39javascript/resources/case05/script.js")));
?>
	</pre>
	<div class="G-Clear"></div>
</div>
<p>是的，使用(?=)就能指定后面紧跟的东西，(?!)指定后面不紧跟的东西，其实在正则中还有(?&lt;=)和(?&lt;!)，表示前面紧跟和前面不紧跟，但是js不支持这两个语法，会在控制台里报错：Uncaught SyntaxError: Invalid regular expression: /2000(?&lt;=Word|Excel|PowerPoint)/: Invalid group。当然，这种语法不多用，了解就好。</p>
<p>关于正则表达式还有很多知识，但是由于我们是初次接触，所以暂时了解这些就行了，以后处理字符串时要先想到正则表达式哦！</p>