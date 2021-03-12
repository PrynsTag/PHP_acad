<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "user/admin_database";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPass, $dbName);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

