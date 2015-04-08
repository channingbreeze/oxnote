<?php
	// 引入SQLHelper.class.php文件
	require_once dirname ( __FILE__ ) . '/../../../common/SQLHelper.class.php';
	// 创建SQLHelper类
	$sqlHelper = new SQLHelper();
	// 选出数据
	$res = $sqlHelper->execute_dql_array("select * from test");
	// 打印数据
	var_dump($res);
?>