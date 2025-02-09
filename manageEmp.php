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
            <div id="manageEmpNavbar">
                <ul>
                    <li><a href="createUserForm.php"><img src="./images/add.png"> Add Employee </a></li>
                    <li><a href="updateUserForm.php"><img src="./images/edit.png"> Edit Employee Details </a> </li>
                    <li><a href="deleteUserForm.php"><img src="./images/delete.png"> Delete Employee </a></li>
                </ul>
            </div>
            <?php
            require_once("dbconnect.php");
            $query = "select * from user_info where user_type='user'";
            $result = mysqli_query($con, $query) or die('Fetch data error');
            echo ("<table border='0' id='showData'>");
            echo ("<tr>
                    <th> User Id. </th>
                    <th> Employee Name </th>
                    <th> Employee Password</th>
                    <th>Registration Date </th></tr>");
            $cnt = 0;
            while ($row = mysqli_fetch_array($result)) {
                $cnt++;
                echo ("<tr>");
                echo ("<td>");
                echo ($cnt);
                echo ("</td>");
                echo ("<td>");
                echo ($row["user_name"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["user_pass"]);
                echo ("</td>");
                echo ("<td>");
                echo ($row["login_date"]);
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