<?php
require_once "dbConnection.inc";
session_start();

if (isset($_POST["resetPass"])) {
    $newPass = $_POST["newPass"];
    $username = $_SESSION["username"];
    $currPass = $_POST["currPass"];
    $oldPass = $_SESSION["password"];
    if (isset($conn) && $conn) {
        $query = "UPDATE user_database.user_information SET password = '$newPass' WHERE username = '$username' AND password = '$oldPass';";

        if ($oldPass !== $currPass) { echo "Current password is not the same with the old password"; }
        else {
            mysqli_query($conn, $query);
            $_SESSION["password"] = $newPass;
            header("Location: ./profile.php?status=success");
        }
    }
}