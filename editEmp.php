<?php
require_once("dbconnect.php");
$id = $_REQUEST["txtuid"];
$x = $_REQUEST["txtUser"];
$y = $_REQUEST["txtPassword"];
$query = "update user_info set user_name='$x',user_pass='$y' where uid=$id";
mysqli_query($con, $query) or die("Employee data insertion error");
header("location:updateUserForm.php");
