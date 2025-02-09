<?php
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
            <div id="manageParamNavbar">
                <ul>
                    <li> <a href="createParamForm.php"><img src="./images/add.png"> Add Parameter </a></li>
                    <li><a href="updateParamForm.php"><img src="./images/edit.png"> Edit Parameter Details </a> </li>
                    <li><a href="deleteParamForm.php"> <img src="./images/delete.png"> Delete Parameter </a></li>
                </ul>
            </div> <!--end of rightContent --->
            <?php
            require_once("dbconnect.php");
            $query = "select * from param_info";
            $result = mysqli_query($con, $query) or die('Fetch data error');
            echo ("<table border='0' id='showParam'>");
            echo ("<tr>
                    <th> Parameter Id. </th>
                    <th> Parameter Name </th>
                    <th> Parameter Low Range</th>
                    <th> Parameter High Range</th>
                    <th> Low Range Color</th>
                    <th> Perfect Color</th>
                    <th> High Range Color</th>
                    <th> Action</th> 
                    </tr>");
            $cnt = 0;
            while ($row = mysqli_fetch_array($result)) {
                $cnt++;
                echo ("<tr>");
                echo ("<td>");
                echo ($cnt);
                echo ("</td>");
                echo ("<td>");
                echo ($row["param_name"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["param_low_range"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["param_high_range"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["low_color"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["mid_color"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["high_color"]);
                echo ("</td>");
                echo ("<td>");
                $pid = $row['pid'];
                echo ("<a href='editParamForm.php?prid=$pid'>Edit</a>");
                echo ("</td>");
                echo ("</tr>");
            }
            echo ("</table>");
            echo ("<hr>");
            ?>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>