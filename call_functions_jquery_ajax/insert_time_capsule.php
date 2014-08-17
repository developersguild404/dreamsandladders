<!--
NEED 
1.SESSION user_id 
2.Get Dream id
-->
<?php
include('../includes/config.php');
session_start();
	if(isset($_POST['insertTimeCapsule'])){
		$tc_caption = $_POST["tc_caption"];
		$tc_date_to_show = $_POST["tc_date_to_show"];
		
		
		$date = date('Y-m-d H:i:s');
		$user_id = $_SESSION["user_id"];
			$query="INSERT INTO `tbl_time_capsule`(
					`tc_id`, 
					`tc_caption`, 
					`tc_file_name`, 
					`tc_file_type`, 
					`tc_file_blob`, 
					`tc_file_location`, 
					`tc_date_uploaded`, 
					`user_id`, 
					`tc_date_to_show`) 
					VALUES 
					('',
					'$tc_caption',
					'',
					'',
					'',
					'',
					'',
					'$user_id',
					'$tc_date_to_show')";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
				if($result){
				echo	"<script type='text/javascript'>
					window.alert('Your Letter will be send to your Future Self') 
					window.location.href='../time_capsule_page.php';
				</script>";
				}else{
					echo "2";
				}
			}
			
?> 