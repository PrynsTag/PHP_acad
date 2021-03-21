<?php
require_once "../dbConnection.inc";
session_start();

if (isset($conn, $_POST["login"]) && $conn) {
    $user_username = mysqli_real_escape_string($conn, $_POST["login-username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["login-password"]);

    $sql = "SELECT access_level, status FROM sa4_database.sa4_table 
            WHERE username = '$user_username' AND password = '$user_password';";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);

        if ($row["status"] !== "active") {
            header("Location: ../login.php?status={$row["status"]}");
        } else {
            $_SESSION["username"] = $user_username;
            $_SESSION["password"] = $user_password;
            $_SESSION["accessLevel"] = $row["access_level"];

            header("Location: ../profile_panel.php");
        }
    } else {
        echo "Wrong username or password";
    }
} else {
    die("Connection failed: " . mysqli_error($conn));
}