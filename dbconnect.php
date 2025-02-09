<?php
$con = mysqli_connect("127.0.0.1", "root", "") or die("Connectivity Error");
mysqli_select_db($con, "data_analyser") or die("Database Connectivity Error");
