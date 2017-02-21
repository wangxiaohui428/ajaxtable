<?php
	/*前后台分离*/
	include "db.php";
	$sql=$db->query("select * from stu");
	$arr=array();
	while($rows=$sql->fetch_assoc()){
		$arr[]=$rows;
	}
	echo json_encode($arr);
?>