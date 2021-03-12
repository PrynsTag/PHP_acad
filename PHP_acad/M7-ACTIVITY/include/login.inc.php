<?php
require_once "../dbConnection.inc";
session_start();

if (isset($conn, $_POST["login"]) && $conn) {
    $user_username = mysqli_real_escape_string($conn, $_POST["login-username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["login-password"]);

    $sql = "SELECT userlevel FROM `user/admin_database`.record 
            WHERE username = '$user_username' AND password = '$user_password';";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $_SESSION["username"] = $user_username;
        $_SESSION["password"] = $user_password;
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row["userlevel"] === "admin") { header("Location: ../profile.php?user=admin"); }
        if ($row["userlevel"] === "user") { header("Location: ../profile.php?user=user"); }
    }
    else { echo "Wrong username or password"; }

} else {
    die("Connection failed: " . mysqli_error($conn));
}