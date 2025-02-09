<?php
require_once("header.php");
?>
<div id="content">
    <div id="adminArea">
        <div id="leftContent">
            <?php
            require_once("adminMenu.php");
            require_once("dbconnect.php");
            $id = $_REQUEST['uid'];
            $query = "select * from user_info where uid=$id";
            $rsSet = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($rsSet)) {
            ?>
        </div>
        <div id="rightContent">
            <div id="manageEmpNavbar">
                <ul>
                    <li> <a href="createUserForm.php"><img src="./images/add.png"> Add Employee </a></li>
                    <li><a href="updateUserForm.php"><img src="./images/edit.png"> Edit Employee Details </a> </li>
                    <li><a href="deleteUserForm.php"> <img src="./images/delete.png"> Delete Employee </a></li>
                </ul>
            </div>
            <form method="get" action="editEmp.php" class="EmpForm">
                <label>Enter New Name</label>
                <input type="text" name="txtUser" value="<?= $row['user_name'] ?>"><br><br>
                <label>Enter New Password</label>
                <input type="password" name="txtPassword" value="<?= $row['user_pass'] ?>"><br><br>
                <input type="hidden" name="txtuid" value="<?= $id ?>">
                <input type="submit" value="Ok">
                <input type="reset" value="Cancel">

            </form>
        </div>
    </div>
</div>
<?php
            }
            require_once("footer.php");
?>