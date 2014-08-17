$(document).ready(function(){

	//register user START
	$("#registerUser").click(function(){
		username = $("#user_username").val();
		password = $("#user_password").val();
		c_password = $("#user_c_password").val();
		nickname = $("#user_nickname").val();
		
		if(password != c_password){
			alert("password did not match");
		}else{
			registerUser();
		}
	});
	//register user END
	
	
	//insert dream START
	$("#insertDream").click(function(){
		dreamId = $("#dream_id").val();
		dreamCaption = $("#dream_caption").val();
		dreamFileName = $("#dream_file_name").val();
		dreamFileType = $("#dream_file_type").val();
		dreamFileBlob = $("#dream_file_blob").val();
		dreamFileLocation = $("#dream_file_location").val();
		dreamDateUploaded = $("#dream_date_uploaded").val();
		userId = $("#user_id").val();
	
	});
	//insert dream END
	
	<!---------functions START -->

	function registerUser(){
			if(username  == "" || password == ""  || c_password  == "" || nickname == "" ){
				alert("Please complete the reg form");
			}else{
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/register_user.php",
					type: "POST",
					data: {"username":username,"password":password,"nickname":nickname},
					
					success: function(data){
						alert(data);
					}
				});
				//ajax request END
			}
		}//registerUser END
		
		
		function insertDream(){
		
			if(	dreamId == "" || 
				dreamCaption == "" || 
				dreamFileName == "" || 
				dreamFileType == "" || 
				dreamFileBlob == "" || 
				dreamFileLocation == "" || 
				dreamDateUploaded == "" || 
				userId == "" )
				
				/*
			(	dreamId == "" || 
				dreamCaption == "" || 
				dreamFileName == "" || 
				dreamFileType == "" || 
				dreamFileBlob == "" || 
				dreamFileLocation == "" || 
				dreamDateUploaded == "" || 
				userId == "" )
		*/
				
				
				{
				
				alert("Please complete the insert dream form");
				
				}else{
					//ajax request START
					$.ajax({
						url: "call_functions_jquery_ajax/insert_dream.php",
						type: "POST",
						data:	{
								"dreamId":dreamCaption	,
								"dreamCaption":dreamCaption, 
								"dreamFileName":dreamFileName ,
								"dreamFileType":dreamFileType ,
								"dreamFileBlob":dreamFileBlob , 
								"dreamFileLocation":dreamFileLocation ,
								"dreamDateUploaded":dreamDateUploaded,
								"userId":userId
								},
							
						success: function(data){
							alert(data);
						}
					});
					//ajax request END
				
				}
		
		}
		
<!---------functions END -->
});
