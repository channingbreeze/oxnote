<?php 
	if(isset($_GET['param'])) {
		echo "get param : " . $_GET['param'];
	} else {
		echo "no param found";
	}
?>