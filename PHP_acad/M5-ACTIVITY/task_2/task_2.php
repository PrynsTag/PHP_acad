<?php
if (isset($_POST["submit"])) {
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];

    echo "<pre>";
    setcookie("First_Name", $firstName, time() + 10);
    setcookie("Middle_Name", $middleName, time() + 20);
    setcookie("Last_Name", $lastName, time() + 30);
    print_r(array_slice($_COOKIE, 0, 3));
}


