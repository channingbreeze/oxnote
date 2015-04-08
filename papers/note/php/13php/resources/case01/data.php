<?php
	if(!file_exists("data.txt")) {
		$num = 0;
	} else {
		$num = file_get_contents("data.txt");
		$num = $num + 1;
	}
	file_put_contents("data.txt", $num);
	echo $num;
?>