<!--
NEED 
1.SESSION user_id 
2.Get Dream id
-->

<?php 
include_once("includes/config.php");
session_start();

if(!isset($_SESSION["user_id"])){

	header("location:login_page.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dreams and Ladders</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
`
	<style type="text/css">
	
		.imageSize{
			max-width: 500px;
		}
	</style>
		<style>
			.divDemoBody  {
				width: 60%;
				margin-left: auto;
				margin-right: auto;
				margin-top: 100px;
				}
			.divDemoBody p {
				font-size: 18px;
				line-height: 140%;
				padding-top: 12px;
				}
			.divDialogElements input {
				font-size: 18px;
				padding: 3px; 
				height: 32px; 
				width: 500px; 
				}
			.divButton {
				padding-top: 12px;
				}
			</style>
			
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/icon_circle.png" alt="tes" style="width:30px;" />  Dreams and Ladders</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo "$_SESSION[user_nickname]"?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo "$_SESSION[user_nickname]"?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo "$_SESSION[user_nickname]"?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "$_SESSION[user_nickname]"?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout_page.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home_page.php"><i class="fa fa-fw fa-star"></i> My Dreams and Ladders</a>
                    </li>
                    <li>
                        <a href="achievement_page.php"><i class="fa fa-fw fa-trophy"></i> My achievement Board</a>
						
                    </li>
						
                    <li>
                        <a href="time_capsule_page.php"><i class="fa fa-fw fa-sign-in"></i> Time Capsule</a>
                    </li>
                    <li>
                        <a href="tga_page.php"><i class="fa fa-fw fa-book"></i> The Great Adviser</a>
                    </li>
                    <li>
                        <a href="avatar_page.php"><i class="fa fa-fw fa-user"></i> My Avatar</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <i class="fa fa-star"></i> My Dreams and Ladders 
                        </h1>
						<!--
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						-->
                    </div>
                </div>
                <!-- /.row -->
				<!--
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
				-->
                <!-- /.row -->
								<div class="row">	
									<div class="col-lg-12 panel">
									
										<a class="fancybox" href="#addNewDreamModal"><button class="btn btn-primary col-lg-12 btn-lg" ><i class="fa  fa-plus"></i>&nbsp &nbsp Add New Dream</button></a>
									</div>
								</div>
				<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading ">
                                <h3 class="panel-title "><i class="fa fa-fw fa-star"></i> My Dreams and Ladders </h3>
                            </div>
								<div class="panel-body" >
								
								
								<?php
									$query = "SELECT * from tbl_dreams where user_id = $_SESSION[user_id] order by dr_id DESC";
									$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
										while($row = mysqli_fetch_array($result)){
											echo "<div class='col-sm-12 col-lg-6' >";
											echo "	<div class='panel panel-primary'>";
											echo "			<div class='panel-heading'>";
											echo "				<h3 class='panel-title'> $row[dr_caption]</h3>";
											echo "			</div>";
											echo "			<div class='panel-body'>";
											echo "			<img src='$row[dr_file_location]$row[dr_file_name]' class='img-thumbnail' />";
											
											
											echo "			<span class='list-group-item  col-lg-12'><button class='btn btn-primary col-lg-12 btn-lg' >  Share on Facebook   <i class='fa fa-facebook'></i></button></span>";
											echo "			<span class='list-group-item  col-lg-12'><button class='btn btn-primary col-lg-12 btn-lg' >  Share on Twitter   <i class='fa fa-twitter'></i></button></span>";
											echo "			</div>";
											echo "		</div>";
											echo "	</div>";
											/* ladders start*/
											echo "<div class='list-group'>";
												
												echo "<br/>";
												echo "<div class='row' style=''>";
													echo "<div class='col-lg-6'>";
														echo "<span class='list-group-item  col-lg-12 active'>My Ladders</span>";
																$query2 = "SELECT * from tbl_ladders where dr_id = $row[dr_id]";
																$result2 = mysqli_query($conn,$query2) or die (mysqli_error($conn));
																while($row2 = mysqli_fetch_array($result2)){
																		
																		
																		
																		echo "<span class='list-group-item  col-lg-12'>
																				<p class='list-group-item-heading' style='display:inline-block'>$row2[lad_caption]</p>
																				<button class='btn btn-primary' style='float:right'>I've done it!</button>
																			</span>";
																	}
															
												echo "<div class='panel-body'>
															<div class='row'>	
																<div class='col-lg-12 panel'>
																<br />
																
																	<a class='fancybox' name='' href='#addNewLadderModal'>
																		<input type='hidden' class='dr_id' value='$row[dr_id]' />
																		<button class='btn btn-primary col-lg-12' > Add New Ladder</button>
																	</a>
																
															</div>
														</div>";
															
															
													echo "</div>";
												echo "</div>";/* ladders END*/
												
											
											echo "	</div>";
											
											echo "</div>";/* $query end*/
										}
								
								
								?>
								<!--
								<div class="panel panel-green">
										<div class="panel-heading">
											<h3 class="panel-title">Achievements</h3>
										</div>
										<div class="panel-body">
											<form action="">
												  <div class="form-group">
													<label>Question here</label>
													<textarea class="form-control " rows="3"></textarea><br />
													<button type="submit" class="btn btn-primary">submit</button>
												</div>
											</form>
										</div>
									</div>
								
								
								-->
								
                            </div>
                        </div>
                    </div>
					
					
				</div>
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	
	<div style="display:none" id="addNewDreamModal">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"> <i class="fa fa-star"></i> Lets add more dreams</h3>
					</div>
					<div class="panel-body">
						<form action="call_functions_jquery_ajax/insert_dream.php" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								
								<textarea class="form-control " rows="1" name="dreamCaption" placeholder="We will put the questions here"></textarea>
								<br />
								<label for="">Attach a picture to it:</label>
								<input type="file" name="file" id="file"><br />
								<button  type="submit" class="btn btn-primary col-lg-12" name="insertDream">submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- addNewDreamModal END -->
	
	
	<div style="display:none" id="addNewLadderModal">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"> <i class="fa fa-star"></i> Step to reach my dream</h3>
					</div>
					<div class="panel-body">
						<form action="call_functions_jquery_ajax/insert_ladder.php" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<input type="hidden" name="dr_id" id="modalDrId" />
								<textarea class="form-control " rows="1" name="ladCaption" placeholder="We will put the questions here"></textarea>
								<br />
								
								
								<button  type="submit" class="btn btn-primary col-lg-12" name="insertLadder">submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- addNewLadderModal END -->
	
	
	
</div>
	
	
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<script type="text/javascript" src="js/jq.js"></script><!-- for  jquery -->
	
	<script type="text/javascript" src="js/js_functions.html"></script>
	
	
	
<!-- fancy box START  (eto ung para hinde ka na punta sa ibang page pag magAdd k ng quote)--> 
	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<!-- fancy box END -->
	
	<script type="text/javascript">
				$(document).ready(function(){
					
					$("a.fancybox").click(function(){
						a = $(this).children(".dr_id").val();
						
						$("#modalDrId").val(a);
					});
					
				});
			</script>

</body>

			

</html>
<?php 

}
?>