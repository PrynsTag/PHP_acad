<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "dogregister";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPass, $dbName);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

