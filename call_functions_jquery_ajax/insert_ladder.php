<!--
NEED 
1.SESSION user_id 
2.Get Dream id
-->
<?php
include('../includes/config.php');
session_start();
	if(isset($_POST['insertLadder'])){
		$lad_caption = $_POST["ladCaption"];
		
		$dr_id = $_POST['dr_id'];
		
		$date = date('Y-m-d H:i:s');
		$user_id = $_SESSION["user_id"];
			$query="INSERT INTO `tbl_ladders`(
				`lad_id`, 
				`lad_caption`, 
				`lad_date_uploaded`, 
				`user_id`, 
				`dr_id`) 
				VALUES (
				'',
				'$lad_caption',
				'$date',
				'$user_id',
				'$dr_id')";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
				if($result){
					header("location:../home_page.php");
				}else{
					echo "2";
				}
			}
			
?> 