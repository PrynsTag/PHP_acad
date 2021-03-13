<?php
require_once "../dbConnection.inc";
session_start();

if (isset($conn, $_POST["login"]) && $conn) {
    $user_username = mysqli_real_escape_string($conn, $_POST["login-username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["login-password"]);

    if (!empty($_POST["remember"])) {
        setcookie("remember_username", $_POST["login-username"], 0, "../login.php");
        setcookie("remember_password", $_POST["login-password"], 0, "../login.php");
    }

    $sql = "SELECT id FROM user_database.user_information WHERE username = '$user_username'  AND  password = '$user_password';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Session Variables
        $_SESSION["username"] = $user_username;
        $_SESSION["password"] = $user_password;
        header("Location: ../index.html");
    } else {
        echo "Wrong username or password";
    }

} else {
    die("Connection failed: " . mysqli_error($conn));
}