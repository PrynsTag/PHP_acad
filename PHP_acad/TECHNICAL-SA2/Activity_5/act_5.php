<?php
    $string = $_POST['string'] ?? ' ';
    $string = htmlspecialchars($string);
    echo '<form method=post action="">';
    echo '<h1>String Functions in PHP</h2>';
    echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
    echo '<input type="submit" value="Apply Functions">&nbsp;';
    echo '<input type="reset" value="Reset"><br />';
    echo '</form>';

    list($beforeWord, $afterWord) = explode(" html ", $string);
    list($beforeThis, $afterThis) = explode(htmlspecialchars(" <input> "), $string);

    function wordFormat($word): string
    {
        return '*'.$word.'*';
    }

    $myFunctions = array(
        array("Original value of \$string", $string),
        array("Number of characters", strlen($string)),
        array("Number of words", str_word_count($string)),
        array("First character to uppercase", ucfirst($string)),
        array("First character of each word to uppercase", ucwords($string)),
        array("to lowercase", strtolower($string)),
        array("to uppercase", strtoupper($string)),
        array("Without leading spaces", rtrim($string)),
        array("Without trailing spaces", ltrim($string)),
        array("Without leading and trialing spaces", trim($string)),
        array("MD5 value of \$string", md5($string)),
        array("Base65 value of \$string", base64_encode($string)),
        array("First 16 characters", substr($string, 0, 16)),
        array("Last 4 characters", substr($string, -4)),
        array("4 characters starting from the 20'th Position", substr($string, 20, -4)),
        array("Position of the word \"guide\"", strpos($string, "guide")),
        array("Position of the word \"UE\"", strpos($string, "UE") ?: "bool(false)"),
        array("\"HTML\" word in uppercase",
            sprintf("%s %s %s", $beforeWord, strtoupper(explode(" ", $string)[5]), $afterWord)),
        array("\"<'INPUT'>\" word in uppercase",
            sprintf("%s %s %s", $beforeThis, strtoupper(explode(" ", $string)[7]), $afterThis)),
        array("Strings converted to array",
            implode("<br>", array_map("wordFormat", explode(" ", trim($string)))))
    );
