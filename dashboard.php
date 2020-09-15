<?php 
require_once("includes/config.php");
//require_once("includes/checklogin.php");
//check_login();

session_start();
//error_reporting(0);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
	<meta content="" name="author" />
    <title>Admin - Life Care Hospital</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Raleway&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!--Style CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <!--Vendor Style CSS-->
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" media="screen">
    <!--Select2-->
    <link href="vendor/select2-4.0.13/css/select2.min.css" rel="stylesheet" />
    <!--Date Time Picker-->
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <!--Main CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-4.css" id="skin_color" />
</head>
<body>
        <div id="app">
            <!--Sidebar SECTION-->
            <?php include('includes/sidebar.php');?>
            
            <!--Header SECTION-->
            <div class="app-content">
                <?php include('includes/header.php');?>

                <!--END NAVBAR-->
                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- PAGE TITLe-->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle">Admin | Dashboard</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Dashboard</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- END PAGE TITLe-->

                        <!--MAIN CONTAIN-->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> 
                                                <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-hospital-o fa-stack-1x fa-inverse"></i> 
                                            </span>
                                            <h2 class="stepTitle">Manage Patients</h2>
                                            <p class="links cl-effect-1">
                                                <a href="manage-patients.php">
<?php $query=mysqli_query($con, "SELECT * FROM users ");
      $num_rows = mysqli_num_rows($query); { ?>
          Total Patients : <?php echo htmlentities ($num_rows);
      }
          ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x">
                                                <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-md fa-stack-1x fa-inverse"></i> 
                                            </span>
											<h2 class="StepTitle">Manage Doctors</h2>
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
	<?php $query=mysqli_query($con, "SELECT * FROM doctors ");
      $num_rows = mysqli_num_rows($query); { ?>
          Total Doctors : <?php echo htmlentities ($num_rows);
      }
          ?>
												</a>
												
											</p>
										</div>
									</div>
								</div>
                                <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x">
                                                <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-calendar fa-stack-1x fa-inverse"></i> 
                                            </span>
											<h2 class="StepTitle">Appointments</h2>
											<p class="links cl-effect-1">
												<a href="appointment-details.php">
	<?php $query=mysqli_query($con, "SELECT * FROM appointment ");
      $num_rows = mysqli_num_rows($query); { ?>
          Total Appointments : <?php echo htmlentities ($num_rows);
      }
          ?>
	
												</a>
											</p>
										</div>
									</div>
								</div>
                                <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x">
                                                <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-envelope-square
                                                fa-stack-1x fa-inverse"></i>  
                                            </span>
											<h2 class="StepTitle">New Queries</h2>
											<p class="links cl-effect-1">
												<a href="unread-queries.php">
	<?php $query=mysqli_query($con, "SELECT * FROM contactus WHERE isRead IS NULL ");
      $num_rows = mysqli_num_rows($query); { ?>
           Messages : <?php echo htmlentities ($num_rows);
      }
          ?>

												</a>		
											</p>
										</div>
									</div>
                                </div>
                                <!-- END MAIN CONTENT -->

                            </div>
                        </div>
                    <!-- END -->
                    </div>
                </div>
            </div>
            <!-- FOOTER SECTION-->
            <?php  include('includes/footer.php');?>
            <!--END FOOTER-->
            
            <!-- SETTINGS SECTION-->
            <?php include('includes/setting.php');?>
            <!--  END SETTINGS SECTION-->
        </div>

    <!-- Start MAIN JAVASCRIPTS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- end MAIN JAVASCRIPTS-->
    <!--  JAVASCRIPTS FOR THIS PAGE-->
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2-4.0.13/js/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- END JAVASCRIPTS FOR THIS PAGE-->

    <!--JAVASCRIPT HANDLER-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-elements.js"></script>
    <script>
        jQuery(document).ready(function(){
            Main.init();
            FormElements.init();
        })
    </script>

</body>
</html>