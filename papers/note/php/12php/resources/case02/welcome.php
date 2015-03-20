<?php 
	session_start();
	if(isset($_SESSION['username'])) {
		echo "欢迎您 : " . $_SESSION['username'];
	} else {
		header("Location: login.php");
	}
?>