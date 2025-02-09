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
                    <li> <a href="createUserForm.php"><img src="./images/add.png"> Add Employee </a></li>
                    <li><a href="updateUserForm.php"><img src="./images/edit.png"> Edit Employee Details </a> </li>
                    <li><a href="deleteUserForm.php"> <img src="./images/delete.png"> Delete Employee </a></li>
                </ul>
            </div>
            <form method="get" action="insertUser.php" class="EmpForm">
                <label>Enter Employee Name</label>
                <input type="text" name="txtUser"><br><br>
                <label>Enter Password</label>
                <input type="password" name="txtPassword"><br><br>
                <input type="submit" value="Ok">
                <input type="reset" value="Cancel">

            </form>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>