<?php
require_once "dbConnection.inc";
session_start();

if (isset($_POST["resetPass"])) {
    $newPass = $_POST["newPass"];
    $username = $_SESSION["username"];
    $currPass = $_POST["currPass"];
    if (isset($conn) && $conn) {
        $query = "UPDATE user_database.user_information SET password = '$newPass' WHERE username = '$username' AND password = '$currPass';";
        $result = mysqli_query($conn, $query);
        if ($result !== false || $result !== true) {
            header("Location: ./profile.php?status=success");
        } else {
            echo "Current password is not the same with the old password";
        }
    }
}