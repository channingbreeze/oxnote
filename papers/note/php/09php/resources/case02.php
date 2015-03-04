<?php 
	$arr = array();
	$arr[0] = 'apple';
	$arr[1] = 'orange';
	$arr[2] = 'banana';
?>
<ul>
	<?php 
		foreach ($arr as $fruit) {
	?>	
	<li><?php echo $fruit;?></li>
	<?php
		}
	?>
</ul>