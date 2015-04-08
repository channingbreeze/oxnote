<?php 
	if(isset($_POST['username'])) {
		echo "get param : " . $_POST['username'] . '<br/>';
	} else {
		echo "no param found<br/>";
	}
?>
<form action="" method="post">
	<input type="text" name="username" />
	<input type="submit" value="提交" />
</form>