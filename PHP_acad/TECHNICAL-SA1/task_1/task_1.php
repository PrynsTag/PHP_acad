<?php
    // function pre_r($array) {
    //     echo "<pre>";
    //     print_r($array);
    //     echo "</pre>";
    // }
    // pre_r($_POST);


    if (isset($_POST["submit"])) {

        // Generate Full Name
        $firstName = ucwords($_POST["First_Name"]);
        $fullName = implode(" ", array(ucwords($_POST["First_Name"]), ucfirst($_POST["Middle_Name"]), ucfirst($_POST["Last_Name"])));

        // Generate Age
        $birthDate = isset($_POST["birthDate"]) ? $_POST["birthDate"] : "1973-12-02";
        $timezone  = new DateTimeZone('Asia/Shanghai');
        $age = DateTime::createFromFormat('Y-m-d', $birthDate, $timezone)
            ->diff(new DateTime('now', $timezone))
            ->y;


        $siblings = $_POST["other-sibling"];
        $previousSchool = $_POST["previous-school"];
        $grade = $_POST["grade"];
        $languageInstruction = (isset($_POST["language-instruction"])) ? ucfirst($_POST["language-instruction"]): "English";
        $reasonTransfer = $_POST["transfer-reason"];
        $waterlooSchool = $_POST["waterlooSchool"];
        $medicalCondition = $_POST["medical-condition"];
        $birthCountry = $_POST["birth-country"];
        $provinceBirth = $_POST["province-birth"];
        $citizen = $_POST["citizenship"];
        $ifCanada = $_POST["canada-live"];
        $statusCanada = (isset($_POST["canada-status"])) ? $_POST["canada-status"] : null;
    }


    echo "Hi $firstName! Your Full Name is \"$fullName\" and you are born on $birthDate in $birthCountry.\n
    Your age now is $age and your previous school is $previousSchool. Your preffered language is $languageInstruction.\n
    Your citizenship is: $citizen. You're current grade is: $grade and you're reason for transfering is: \"$reasonTransfer\".";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>

     <style media="screen">

        body {
            margin: 0 auto;
            vertical-align: center;
            width: 70%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%); /* IE 9 */
            -webkit-transform: translate(-50%, -50%); /* Chrome, Safari, Opera */
        }

     </style>

     <body id="wrapper">
         <br>
         <br>
         <a href="index_1.html">Return to Forms</a>
     </body>
 </html>
