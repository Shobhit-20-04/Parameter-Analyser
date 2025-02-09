<?php
require_once("dbconnect.php");
$a = $_REQUEST["txtPname"];
$b = $_REQUEST["txtLowRange"];
$c = $_REQUEST["colLowColor"];
$d = $_REQUEST["txtHighRange"];
$e = $_REQUEST["colHighColor"];
$g = $_REQUEST["colMidColor"];
$query = "insert into param_info(param_name, param_low_range, param_high_range, low_Color, high_Color, mid_color) values ('$a','$b','$d', '$c', '$e', '$g'  )";
mysqli_query($con, $query) or die("Parameter data insertion error");
header("location:manageParam.php");
?>