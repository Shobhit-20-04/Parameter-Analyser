<?php
require_once("dbconnect.php");
$x = $_REQUEST["txtUser"];
$y = $_REQUEST["txtPassword"];
$query = "insert into user_info(user_name, user_pass, user_type, login_date) values ('$x','$y','user', now() )";
mysqli_query($con, $query) or die("Employee data insertion error");
header("location:manageEmp.php");
