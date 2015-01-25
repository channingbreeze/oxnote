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