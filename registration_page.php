<!DOCTYPE HTML>
<html>
	<head>
		<title>Dreams and Ladders Login</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
		<!-- Phone -->
		<link href="css/auriel/phone.css" rel="stylesheet" type="text/css" media="only screen and (max-width:320px)">
		<!-- Tablet -->
		<link href="css/auriel/tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width:321px) and (max-width:768px)">
		<!-- Desktop -->
		<link href="css/auriel/desktop.css" rel="stylesheet" type="text/css" media="only screen and (min-width:769px)">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>

		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

		
    <link href="css/bootstrap.min.css" rel="stylesheet">


	
		
		
		<style type="text/css">
		
			body{
				background: url(images/f.png) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				
				}
			
			
			#mysection{
				background:(255,255,255);
				background:rgba(255,255,255,.70);
				border-radius: 15px;
				-webkit-border-radius: 15px;
				-moz-border-radius: 15px;
				position:relative;
				-webkit-box-shadow: 0 0 20px 10px rgba(0,0,0,.90);
				box-shadow: 0 0 20px 10px rgba(0,0,0,.90);


				}
			input{
			text-align:center;
			}
			
			.appName{
				font-weight: 500;
				
			}
			h6{
			color:green;
		
			}
			.trans{
			border:0;
			background:none;
			}
			
		</style>
	</head>
	<body>

	

		<!-- Main -->
			<div id="main1" style="display:none;" >
			
				<!-- Intro -->
					<section id="mysection" style="">
						
							<center>
								
								<header>
								<h2 class="appName" style="margin-bottom:-25px;">Register to Dreams and Ladders</h2>
								</header>
								<br />
					<div class="panel panel-default trans">
                       
                            <div class="panel-body trans">
								<form role="form" id="" action="">
									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-star"></i></span>
										<input type="text" class="form-control" id="user_nickname" placeholder="Nickname" required>
									</div>
									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" class="form-control" id="user_username" placeholder="example@yahoo.com" required>
									</div>

									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" id="user_password" placeholder="password">
										<input type="password" class="form-control" id="user_c_password" placeholder="confirm password">
									</div>
									<input type="submit" value="Register" id="registerUser" class="btn btn-lg btn-primary col-lg-12" />
								</form>
								<br />
								<br />
								<a href="login_page.page" style="display:block">Back to Login</a>
                            </div>
                        </div>
								
								
							</center>
						
					</section>
					
				
			</div>
		<script>
            $(document).ready(function(){

			 $('#main1').fadeIn("slow");
			 
			 
			$("#registerUser").click(function () {
		alert($("#user_username").val());
			username = $("#user_username").val();
			password = $("#user_password").val();
			c_password = $("#user_c_password").val();
			nickname = $("#user_nickname").val();

			if (password != c_password) {
				alert("password did not match");
			} else {
		
				registerUser();
			}
		});

		function registerUser() {
			if (username == "" || password == "" || c_password == "" || nickname == "") {
				alert("Please complete the form");
			} else {
		
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/register_user.php",
					type: "POST",
					data: { "username": username, "password": password, "nickname": nickname },

					success: function (data) {
						location.href = "login_page.php";
					}
				});

			}
		}
			            });
		
		</script>
		

	</body>

</html>
