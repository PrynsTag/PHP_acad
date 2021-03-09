<?php
require_once "../dbConnection.inc";

if (isset($_POST["signup"])) {
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $confirm_pass = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    $sql = "INSERT INTO user_database.user_information (firstname, middlename, lastname, username, password, birthday, email, `contact number`) 
        VALUES ('$firstName', '$middleName', '$lastName', '$username', '$pass', '$birthday', '$email', '$contact');";

    if (isset($conn) && $conn) {
        mysqli_query($conn, $sql);
        header("Location: ../signup.php?signup=success&username={$username}");
        exit();
    }

    die("Connection Failed:" . mysqli_error($conn));
}

header("Location: ../signup.php?signup=fail");


