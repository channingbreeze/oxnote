<div class="comment">
	<ul>
		<li>
			<div class="layer">1F</div>
			<div class="head"><img src="images/default.jpg" /></div>
			<div class="time">2014-01-01 11:22:33</div>
			<div class="name"><a href="#">小小牛</a></div>
			<div class="comment">如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点</div>
		</li>
		<li>
			<div class="layer">1F</div>
			<div class="head"><img src="images/default.jpg" /></div>
			<div class="time">2014-01-01 11:22:33</div>
			<div class="name"><a href="#">小小牛</a></div>
			<div class="comment">如果您觉得此教程不错，想支持一下，</div>
		</li>
		<li>
			<div class="layer">1F</div>
			<div class="head"><img src="images/default.jpg" /></div>
			<div class="time">2014-01-01 11:22:33</div>
			<div class="name"><a href="#">小小牛</a></div>
			<div class="comment">如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点如果您觉得此教程不错，想支持一下，您可以通过支付宝扫码给我们一点</div>
		</li>
	</ul>
	<div>分页</div>
<?php 
	if(!isset($_SESSION['user'])) {
?>
	<div class="loginToComment">
		<div class="info">评论请先<a id="loginComment" href="#">登录</a></div>
	</div>
<?php 
	} else {
?>
	<div class="userComment">
		<textarea id="userInputComment"></textarea>
		<button id="sendComment">发表评论</button>
	</div>
<?php 
	}
?>
</div>