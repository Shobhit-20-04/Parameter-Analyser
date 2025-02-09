<?php @session_start(); ?>
<html>

<head>
    <title>
        Data Analyser
    </title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <main>
        <header>
            <div id="leftLogo">
                <a href="./index.php">
                    <img src="./images/leftLogo.jpg">
                </a>
            </div><!-- end of leftLogo-->
            <div id="title">
                <h1>Parameter Analyser</h1>
                <h3>Jaldi Data Analyse Karoo!! </h3>
                <div id="loginUser">
                    <?php
                    if (isset($_SESSION["uname"])) {
                        echo ("Welcome " . $_SESSION["uname"]);
                        echo ("&nbsp");
                        echo ("<a href='logout.php'>Logout!!</a>");
                    } else {
                        echo ("<a href='loginForm.php'>Login!!</a>");
                    }
                    ?>
                </div>
            </div><!-- end of title-->
            <div id="rightLogo">
                <img src="./images/rightLogo.jpg">
            </div><!--end of rightLogo-->
        </header>