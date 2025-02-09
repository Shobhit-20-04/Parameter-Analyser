<?php
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
            require_once("dbconnect.php");
            $query = "select * from param_info";
            $result = mysqli_query($con, $query) or die('Fetch data error');
            echo ("<table border='0' id='showData'>");
            echo ("<tr>
                    <th> Parameter Name </th>
                    <th> Parameter Low Range</th>
                    <th> Parameter High Range</th></tr>");
            while ($row = mysqli_fetch_array($result)) {
                echo ("<tr>");
                echo ("<td>");
                echo ($row["param_name"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["param_low_range"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["param_high_range"]);
                echo ("</td>");
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