<?php
require_once "../dbConnection.inc";

if (isset($_POST["save"])) {
    $firstName = $_POST["firstname"];
    $middleName = $_POST["middlename"];
    $lastName = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $birthDate = $_POST["date"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $accessLevel = $_POST["user_level"];
    $status = $_POST["status"];

    if (isset($conn) && $conn) {
        $sql = "INSERT INTO sa4_database.sa4_table (first_name, middle_name, last_name, contact, email, birthday, username, password, access_level, status) 
                VALUES ('$firstName', '$middleName', '$lastName', '$contact', '$email', '$birthDate', '$username', '$password', '$accessLevel', '$status')";
        $query = mysqli_query($conn, $sql);

        if ($query !== false) { header("Location: ../admin_add.php?signup=success&username={$username}"); }
        else { header("Location: ../admin_add.php?signup=fail"); }
    }

    die("Connection Failed:" . mysqli_error($conn));
}

header("Location: ../admin_add.php?signup=fail");


