<?php
	require_once dirname ( __FILE__ ) . '/../../../../common/SQLHelper.class.php';
	if(isset($_POST['username'])) {
		$sqlHelper = new SQLHelper();
		$sql = "select count(id) as count from test where username='" . $_POST['username'] . "'";
		$res = $sqlHelper->execute_dql_array($sql);
		if($res[0]['count'] > 0) {
			echo "false";
		} else {
			echo "true";
		}
	} else {
		echo "false";
	}
?>