<?php
require_once("header.php");
?>
<div id="content">
    <form id="startForm" method="get" action="checkLogin.php">
        <label>Enter username</label>
        <input type="text" name="txtUname">
        <br><br>
        <label>Enter password</label>
        <input type="password" name="txtpwd">
        <br>
        <input type="submit" value="Ok">
        <input type="reset" value="Cancel">
        <br>
    </form>
</div><!-- end of content-->
<?php
require_once("footer.php");
?>