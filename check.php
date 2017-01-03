<?php
session_start();
include 'includes/db_con.php';

$email=$_POST['email'];


	$sql="SELECT * from user_info where uname='".$email."' AND id!=".$_SESSION['id'];
	$q=mysql_query($sql);
	$count=mysql_num_rows($q);
	if($count>0)
	{
		$a=mysql_fetch_array($q);
		echo json_encode($a);
	}
	else
	{
		echo json_encode("N");
	}

?>