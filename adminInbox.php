<?php @session_start();
require_once("header.php");
?>
<div id="content">
    <div id="adminArea">
        <div id="leftContent">
            <?php
            require_once("adminMenu.php");
            ?>
        </div>
        <div id="rightContent">
            <?php
            require_once("dbconnect.php");
            $query = "select * from mail_info where receiver=$_SESSION[id]";
            $result = mysqli_query($con, $query) or die('Fetch data error');
            echo ("<table border='0' id='newsData'>");
            echo ("<tr>
                    <th>Sr. No. </th>
                    <th>Mail Title</th>
                    <th>Receiving Date</th></tr>");
            $cnt = 0;
            while ($row = mysqli_fetch_array($result)) {
                $cnt++;
                echo ("<tr>");
                echo ("<td>");
                echo ($cnt);
                echo ("</td>");
                $id = $row["mail_id"];
                echo ("<td>");
                echo ("<a href='showMail.php?id=$id'>" . $row["mail_heading"] . "</a>");
                echo ("</td>");
                echo ("<td>");
                echo ($row["send_date"]);
                echo ("</td>");
                echo ("<td>");
                echo ("</tr>");
            }
            echo ("</table>");
            ?>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>