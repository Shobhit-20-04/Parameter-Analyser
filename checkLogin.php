<?php @session_start();
$txtuname = $_REQUEST["txtUname"];
$txtpass = $_REQUEST["txtpwd"];
require_once("dbconnect.php");
$sql = "select * from user_info where user_name='$txtuname'";
$rsset = mysqli_query($con, $sql);
if (mysqli_num_rows($rsset) == 0) {
    header("location:loginForm.php?resmsg=0");
} else {
    $row = mysqli_fetch_array($rsset);
    if ($row["user_pass"] == $txtpass) {
        $_SESSION["uname"] = $txtuname;
        $_SESSION["id"] = $row["uid"];
        if ($row["user_type"] == "admin") {
            $_SESSION["utype"] = "admin";
            header("location:adminDash.php");
        } else if ($row["user_type"] == "user") {
            $_SESSION["utype"] = "user";
            header("location:userDash.php");
        }
    } else {
        header("location:loginForm.php?resmsg=1");
    }
}
