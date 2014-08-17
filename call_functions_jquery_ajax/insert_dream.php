
<?php
include('../includes/config.php');
session_start();
	if(isset($_POST['insertDream'])){
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);

	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 4194304000 /*up to 4gb*/)
	&& in_array($extension, $allowedExts)) {
	  if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  } else {
		/*info on upload*/
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		if (file_exists("../uploaded_files/" . $_FILES["file"]["name"])) {
		  echo $_FILES["file"]["name"] . " already exists. ";
		} else {
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "../uploaded_files/" . $_FILES["file"]["name"]);
		  echo "Stored in: " . "../uploaded_files/" . $_FILES["file"]["name"];
		  
		  
		  /*upload file to DATABASE*/
			$fileName = @mysql_real_escape_string($_FILES['file']['name']);
			$tmpName  = @mysql_real_escape_string($_FILES['file']['tmp_name']);
			$fileSize =	intval($_FILES['file']['size']);
			$fileType = @mysql_real_escape_string($_FILES['file']['type']);

			$content = @mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name']));
			$date = date('Y-m-d H:i:s');
			$user_id = $_SESSION["user_id"];
		
			$dreamCaption = $_POST['dreamCaption'];
			$query="INSERT INTO tbl_dreams(
				dr_id, 
				dr_caption, 
				dr_file_name,
				dr_file_type, 
				dr_file_blob, 
				dr_file_location, 
				dr_date_uploaded, 
				user_id)
				VALUES (
				'',
				'$dreamCaption',
				'$fileName',
				'$fileType',
				'',
				'uploaded_files/',
				'$date',
				'$user_id')";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
			if($result){
				header("location:../home_page.php");
			}else{
				echo '<script language="javascript">';
				echo 'alert("Something went wrong");';
				
				echo '</script>';
			
		}
    }
  }
} else {
  echo "Invalid file";
  echo '<script language="javascript">';
		echo 'alert("Invalid File");';
		echo "window.location.href = 'home_page.php'";
		echo '</script>';
  
}
	}
?> 