<?php 
include_once("../includes/config.php");
session_start();

$username = $_GET["name"];
$pass = $_GET["pw"];
$allow = "asd";


$query = "SELECT * FROM tbl_users WHERE user_email = '" .$username. "' ";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
		
		if ($row = mysqli_fetch_array($result)) {
								$query = "SELECT * FROM tbl_users WHERE user_email = '" .$username. "' AND user_password = '".$pass."'";
								$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
							if ($row = mysqli_fetch_array($result)) {
								$allow = "yes";
								$_SESSION["user_nickname"] = $row["user_nickname"];
								$_SESSION["user_id"] = $row["user_id"];
							}
									
							else{
									
								$allow = "maybe";
								}
							}
									else{
	
				$allow = "no";

					}
			
	echo $_GET['callback']."(".json_encode(array("username"=>$username,"allow"=>$allow)).");";
?>