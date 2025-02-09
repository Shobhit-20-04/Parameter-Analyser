<?php
require_once("dbconnect.php");
$id = $_REQUEST["pid"];
$query = "delete from param_info where pid='$id'";
mysqli_query($con, $query) or die("Employee data insertion error");
header("location:deleteParamForm.php");
