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
            ?>
            <form method="get" action="editParam.php" class="EmpForm">
                <label>Enter New Parameter Name</label>
                <input type="text" name="txtPname"><br><br>
                <label>Enter New Low Range</label>
                <input type="text" name="txtLowRange"><br><br>
                <label>Enter New Low Range Color</label>
                <input type="color" name="colLowColor"><br><br>
                <label>Enter New High Range Color</label>
                <input type="color" name="colHighColor"><br><br>
                <label>Enter New High Range</label>
                <input type="text" name="txtHighRange"><br><br>
                <label>Enter New Mid Range Color</label>
                <input type="color" name="colMidColor"><br><br>
                <input type="hidden" name="pid" value="<?= $_REQUEST['prid']; ?>"><br><br>
                <input type="submit" value="Ok">
                <input type="reset" value="Cancel">

            </form>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>