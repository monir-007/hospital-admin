<?php
ob_start(); // Turns on output buffering

date_default_timezone_set("Asia/Dhaka");

define ('DB_SERVER','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lifecare');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//connection check
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

?>