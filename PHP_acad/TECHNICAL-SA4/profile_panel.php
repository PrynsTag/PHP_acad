<?php
require_once "header.php";
require_once "profile.php";

if (isset($_SESSION["accessLevel"]) && $_SESSION["accessLevel"] === "admin") {
    echo '<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Records</h6>';
    echo '<h6><a href="admin_add.php">Add New User</a></h6>';
    require_once "viewuser.php";
}
require_once "profile_footer.php";
?>