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



					<script>
            $(document).ready(function(){

			 $('#main1').fadeIn("slow");

			            });
		
		</script>
		
		
		
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
			
		</style>
	</head>
	<body>

	

		<!-- Main -->
			<div id="main1" style="display:none;" >
			
				<!-- Intro -->
					<section id="mysection" style="">
						
							<center>
								
								
							
									<form id="loginform" action="javascript:verifyfirst()">
									<div id="popuptext">Already have an account?</div>

										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="text" name="name" class="form-control" id="username" placeholder="Email">
											<input type="password" class="form-control" name="pw" id="password" placeholder="Password">
										</div>

									<input type="submit" value="Log In" id="btnlogin" class="btn btn-lg btn-primary col-lg-12" />											
									</form><br /><br /><br />
								
										<a href="registration_page.php"> New to Dreams and Ladders?<br/> Register Here</a>
								
								
							</center>
						
					</section>
					
				
			</div>

		

	</body>
		<script>
		var lform = $("#loginform");
		function verifyfirst(){

			if($( "#lusername" ).val() == "" || $( "#password" ).val() == "")
			{
		
				$("#popuptext").html("<h6>Please Enter Username/Password</h6>");
			return;
			}
				$("#main1").fadeToggle("slow");	
			
				$.getJSON("call_functions_jquery_ajax/login.php?callback=?",lform.serialize(), function(data)
				{
				
					if (data.allow == "yes")
					{
					localStorage.setItem("username", data.username);
					
					location.href="index.php";
					
					}
					else if(data.allow == "no")
					{
					$("#main1").fadeToggle("slow");
					$("#popuptext").html("<h6>The account you've entered is not associated with Dreams and Ladders. Please check your username or password.</h6>");

					}
					else if(data.allow == "maybe")
					{
					$("#main1").fadeToggle("slow");
					$("#popuptext").html("<h6>Incorrect password. Please Try Again</h6>");

					}else{
					$("#main1").fadeToggle("slow");	
								$("#popuptext").html("<h6>Problem with your login, Please check internet connection or try again later.</h6>");
					
					}
				}).fail(function(data){
					$("#main1").fadeToggle("slow");	
					
				$("#popuptext").html("<h6>Problem with your login, Please check internet connection or try again later.</h6>");
					
					
				});
			}
	</script>
</html>