<?php
require_once("dbconnect.php");
$id = $_REQUEST["pid"];
$a = $_REQUEST["txtPname"];
$b = $_REQUEST["txtLowRange"];
$c = $_REQUEST["colLowColor"];
$d = $_REQUEST["txtHighRange"];
$e = $_REQUEST["colHighColor"];
$g = $_REQUEST["colMidColor"];
$query = "update param_info set param_name='$a', param_low_range='$b', param_high_range='$d', low_color='$c' , high_color='$e', mid_color='$g'  where pid='$id'";
mysqli_query($con, $query) or die("Employee data insertion error");
header("location:updateParamForm.php");
