<?php @session_start();
require_once("header.php");
?>
<div id="content">
    <div id="userArea">
        <div id="leftContent">
            <?php
            require_once("userMenu.php");
            ?>
        </div>
        <div id="rightContent">
            <?php
            if (!isset($_REQUEST['txtMHead'])) { ?>
                <form method="get" action="userCompose.php">
                    <label>Enter Mail Heading</label>
                    <input type="text" name="txtMHead"><br><br>
                    <label> Start Writing:</label>
                    <textarea name="txtAcontent"> </textarea><br><br>
                    <input type="submit" value="OK">
                </form>
            <?php
            } else {
                $txthead = $_REQUEST['txtMHead'];
                $txtContent = $_REQUEST['txtAcontent'];
                require_once("dbconnect.php");
                $sender = $_SESSION["id"];
                $query = "insert into mail_info(sender,receiver,mail_content,mail_heading,send_date) values('$sender',0,'$txtContent','$txthead',now())";
            ?>
                <form method="get" action="userCompose.php">
                    <label>Enter Mail Heading</label>
                    <input type="text" name="txtMHead"><br><br>
                    <label> Start Writing:</label>
                    <textarea name="txtAcontent"> </textarea><br><br>
                    <input type="submit" value="OK">
                </form>
            <?php
            } ?>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>