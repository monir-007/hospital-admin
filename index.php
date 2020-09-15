<?php 
require_once("includes/config.php");

session_start();
error_reporting(0);

if(isset($_POST['submit'])){
    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='".$_POST['username']."' and password = '".$_POST['password']."'");
    $row = mysqli_fetch_array($query);
    if($row>0){
        $direct = "dashboard.php";
        $_SESSION['login']=$_POST['username'];
        $_SESSION['id']=$row['id'];
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$direct");
        exit();
    }
    else{
        $_SESSION['errmsg']="Invalid username or password";
        $direct = "index.php";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$direct");
        exit();
    }
}

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
    <!--Main CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-2.css" id="skin_color" />
</head>
<body class="login">

    <div class="container-fluid">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <h2>Admin | Login</h2>
                </div>
                
                <div class="box-login">
                    <form class="form-login" action="" method="post">
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
                            <p>
                                Please enter your username and paassword to log in.<br>
                                <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <input type="text" class="form-control password" name="password" placeholder="Password">
                                </span>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success pull-right" name="submit">Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
        
                    <!--Copy Right Section-->
                    <div class="copyright">
                        &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Life Care</span>. <span>All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>

     <!-- MAIN JAVAScripts-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
        jQuery(document).ready(function(){
            Main.init();
            Login.init();
        })
    </script>
</body>
</html>