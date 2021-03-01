<?php
    require_once("../task_1/header.php");
    session_start();
    $color1 = $_SESSION["color1"];
    $color2 = $_SESSION["color2"];
    $color3 = $_SESSION["color3"];
    $color4 = $_SESSION["color4"];
    $color5 = $_SESSION["color5"];

    $format = "My Favorite Color 1: %s\n" .
                  "My Favorite Color 2: %s\n" .
                  "My Favorite Color 3: %s\n" .
                  "My Favorite Color 4: %s\n" .
                  "My Favorite Color 5: %s";
    echo "<pre>";
    echo sprintf($format,
                $_SESSION["color1"],
                $_SESSION["color2"],
                $_SESSION["color3"],
                $_SESSION["color4"],
                $_SESSION["color5"]);
?>
