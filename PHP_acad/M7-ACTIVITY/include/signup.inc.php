<?php
require_once "../dbConnection.inc";

if (isset($_POST["save"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userLevel = $_POST["user_level"];
    $status = $_POST["status"];

    if (isset($conn) && $conn) {
        $sql = "INSERT INTO `user/admin_database`.record (email, username, password, userlevel, status) 
                VALUES ('$email', '$username', '$password', '$userLevel', '$status');";
        $query = mysqli_query($conn, $sql);

        if ($query !== false) { header("Location: ../admin_add.php?signup=success&username={$username}"); }
        else { header("Location: ../admin_add.php?signup=fail"); }
    }

    die("Connection Failed:" . mysqli_error($conn));
}

header("Location: ../admin_add.php?signup=fail");


