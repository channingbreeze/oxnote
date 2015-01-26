<?php 
	if( !isset($_SESSION) ) {
		session_start();
	}
	if(!isset($_SESSION['user'])) {
		header("Location: index.php");
	}
	
require_once  dirname ( __FILE__ ) . '/service/userService.class.php';
	
	$userService = new UserService();
	$user = $userService->getUserById($_SESSION['user']['userid']);
	
?>
<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>个人主页|玩命牛的成长记录|互联网教程|互联网|精品教程|玩命牛|成长记录</title>
	<meta name="Keywords" content="个人主页，互联网教程，互联网精品教程，教程，互联网，玩命牛，成长记录" />
	<meta name="Description" content="玩命牛的成长记录是一个为小白提供的互联网情景教程，由牛人带领小白一步一步成为高手" />
<?php 
	include_once 'partials/header.php';
?>
<div class="personal_div">
	<div class="personalInfo">
		<img src="<?php if(isset($user[0]['head_url'])) {echo $user[0]['head_url'];} else {echo "images/default.jpg";}?>"/>
		<span ><?php echo $user[0]['username']?></span>
	</div>
	<div class="selectTitle">请选择头像：</div>
	<ul id="heads">
		<?php 
			for($i=0; $i<=20; $i++) {
				printf("<li data-id='%02d'><img src='images/preheader/%02d.jpg' width='50px' height='50px' /></li>", $i, $i);
			}
		?>
	</ul>
	<div style="clear : both; text-align : center;"><button id="headImageBtn" class="headImageBtn">确定</button></div>
	<div style="height : 50px;"></div>
</div>
<?php 
	include_once 'partials/footer.php';
?>
	<script>
        seajs.use("modules/personal");
    </script>
</body>