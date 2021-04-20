<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHP_acad/M6-ACTIVITY/config/dbConnection.inc";

$name = $_POST["name"];
$breed = $_POST["breed"];
$age = $_POST["age"];
$address = $_POST["address"];
$color = $_POST["color"];
$height = $_POST["height"];
$weight = $_POST["weight"];

$sql = "INSERT INTO dogrecord (Name, Breed, Age, Address, Color, Height, Weight) 
        VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight');";

if (isset($conn) && $conn) { mysqli_query($conn, $sql); }
else { die("Connection failed: " . mysqli_error($conn)); }

header("Location: /PHP_acad/M6-ACTIVITY/public/register.php?signup=success");
