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
                    <li>
                        <a href="home_page.php"><i class="fa fa-fw fa-star"></i> My Dreams and Ladders</a>
                    </li>
                    <li class="active">
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
                            <i class="fa fa-fw fa-trophy"></i> My Achievement Board <small> Keep it up!</small> 
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
					<!-- my achievements start -->
					<div class="col-lg-6">
                        <div class="panel panel-default panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-trophy"></i> My Achievements</h3>
                            </div>
                            <div class="panel-body">
								<div class="row">	
									<div class="col-lg-12 panel">
									
										<a class="fancybox" href="#addNewAc"><button class="btn btn-danger col-lg-12 btn-lg" ><i class="fa  fa-plus"></i>&nbsp &nbsp Add Past Achievements</button></a>
									</div>
								</div>
							
							<?php
									$query = "SELECT * from tbl_achievements where user_id = $_SESSION[user_id] order by ac_id DESC";
									$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
										while($row = mysqli_fetch_array($result)){
										echo "<div class='row'>";
												echo "<div class='col-sm-12 col-lg-12'>";
													echo "	<div class='panel panel-red'>";
													echo "			<div class='panel-heading'>";
													echo "				<h1 class='panel-title'>  $row[ac_date_move_here] </h1>";
													echo "				<h3 class='panel-title'> $row[ac_caption] </h3>";
													echo "			</div>";
													echo "			<div class='panel-body'>";
													echo "			<img src='$row[ac_file_location]$row[ac_file_name]' class='img-thumbnail' />";
													
													echo "			<span class='list-group-item  col-lg-12'><button class='btn btn-danger col-lg-12 btn-lg' >  Share on Facebook   <i class='fa fa-facebook'></i></button></span>";
													echo "			<span class='list-group-item  col-lg-12'><button class='btn btn-danger col-lg-12 btn-lg' >  Share on Twitter   <i class='fa fa-twitter'></i></button></span>";
											
													
													echo "			</div>";
													echo "		</div>";
												echo "	</div>";
											
													
										echo "</div>";/*.row END */
										}
							?>
								
											
							</div>
					</div>
				</div><!-- my achievements END -->
				
				<div class="col-sm-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-trophy"></i> My Medals and Trophies</h3>
                            </div>
                            <div class="panel-body" style="text-align:center;">
								<div class="row">
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 1</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b1.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
									
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 2</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b2.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
									
									
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 3</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b3.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
								</div><!--end ROW -->
								
									<div class="row">
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 4</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b4.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
									
									
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 5</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b5.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
									
									
									<!-- medal 1 start -->
									<div class="col-lg-4">
										<div class="panel panel-red">
											<div class="panel-heading">
												<center><h3 class="panel-title">Medal 6</h3><small>50</small></center>
											</div>
											<div class="panel-body">
												<img src="images/badge/b6.png" class="img-thumbnail" alt="" />
											</div>
										</div>
									</div><!-- medal 1 END -->
								</div><!--end ROW -->
                            </div>
                        </div>
                    </div>
					
								
								
                            </div>
                        </div>
                    </div>
				
					
					
					
				</div>
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	
	
	<div style="display:none" id="addNewAc">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="panel panel-red">
					<div class="panel-heading">
						<h3 class="panel-title"> <i class="fa fa-trophy"></i> Lets add more dreams</h3>
					</div>
					<div class="panel-body">
						<form action="call_functions_jquery_ajax/insert_ac.php" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								
								<textarea class="form-control " rows="1" name="acCaption" placeholder="We will put the questions here"></textarea>
								<br />
								<label for="">Attach a picture to it:</label>
								<input type="file" name="file" id="file"><br />
								<button  type="submit" class="btn btn-danger col-lg-12" name="insertAc">submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- addNewDreamModal END -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
</body>

</html>
<?php
	}
?>
