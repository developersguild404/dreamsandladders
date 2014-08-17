<?php
	session_start();
	include "../includes/config.php";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nickname = $_POST["nickname"];
	
	$query = "INSERT INTO tbl_users VALUES ('','$username','$password','$nickname')";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
	}else{
		$return = "not";
	}
	
	echo ($return);
	
	
?>