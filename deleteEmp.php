<?php
require_once("dbconnect.php");
$id = $_REQUEST["uid"];
$query = "delete from user_info where uid='$id'";
mysqli_query($con, $query) or die("Employee data insertion error");
header("location:deleteUserForm.php");
