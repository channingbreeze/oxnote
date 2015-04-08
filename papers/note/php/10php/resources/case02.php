<?php 
	$host = "localhost";
	$username = "root";
	$password = "91af67c972";
	$dbname = "mynote";
	
	// connect the db(database)
	$conn = mysql_connect($host, $username, $password);
	if (! $conn) {
		die ( 'Could not connect: ' . mysql_error () );
	}
	
	// select db
	mysql_select_db ( $dbname, $conn ) or die ( 'can not use ' . $dbname . ': ' . mysql_error () );
	// set character set
	mysql_query ( 'set names utf8', $conn ) or die ( 'can not set utf8: ' . mysql_error () );
	
	// select data
	$sql = "select * from test";
	$res = mysql_query ( $sql, $conn ) or die ( 'query fail: ' . mysql_error () );
	
	// put data to array
	$arr = array ();
	$i = 0;
	while ( $row = mysql_fetch_assoc ( $res ) ) {
		$arr [$i ++] = $row;
	}
	mysql_free_result ( $res );
	
	mysql_close( $conn );
	
	var_dump($arr);
?>
