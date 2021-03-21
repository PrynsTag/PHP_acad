<?php
require_once "./dbConnection.inc";
require_once "header.php";

if (isset($_SESSION["username"], $conn) && $conn) {
    if (isset($_SESSION["password"])) {
        $user_password = $_SESSION["password"];
    }
    $user_username = $_SESSION["username"];
    $query = "SELECT * FROM sa4_database.sa4_table WHERE username = '$user_username';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $username = sprintf("%s (%s)", $row["username"], $row["access_level"]);
        $fullname = sprintf("%s %s %s", $row["first_name"], $row["middle_name"], $row["last_name"]);
        $contact = $row["contact"];
        $birthDate = $row["birthday"];
        $accessLevel = $row["access_level"];
        $email = $row["email"];
    }
}
?>
<link rel="stylesheet" href="css/profile.css">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-md-2 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <?php
                                    $image = $_SESSION["image"] ?? "https://img.icons8.com/bubbles/100/000000/user.png";
                                    echo sprintf("<img src='%s' class='img-radius' height='100' width='100' alt='User-Profile-Image'>", $image);
                                    ?>
                                </div>
                                <h6 class="f-w-600 m-b-20"><?= $username ?></h6>
                                <h6><a href="image.php">Upload Image</a></h6>
                                <h6><a href="changepass.php">Reset my password</a></h6>
                                <h6><a href="logout.php">Logout</a></h6>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="card-block">
                                <?php
                                echo "<div class='row'>";
                                if ($accessLevel === "admin") {
                                    echo '<h3 class="m-b-20 p-b-5 f-w-600 col-md-8">Admin Account</h3>';
                                } else {
                                    echo '<h3 class="m-b-20 p-b-5 f-w-600 col-md-8">User Account</h3>';
                                }
                                echo '<ol class="breadcrumb col-md-4 justify-content-end">';
                                echo '<li class="breadcrumb-item"><a href="profile_panel.php">Back</a></li>';
                                echo '</ol>';
                                echo "</div>";
                                ?>
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600 text-center">
                                            Welcome, <br>
                                            <span class="text-muted f-w-400"><?= $fullname ?></span>
                                        </p>
                                    </div>

                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">User Level</p>
                                        <h6 class="text-muted f-w-400"><?= $accessLevel ?></h6>
                                    </div>

                                    <div class="col-sm-4 text-center">
                                        <p class="m-b-10 f-w-600">Contact Details</p>
                                        <h6 class="text-muted f-w-400 ">Contact: <?= $contact ?></h6>
                                        <h6 class="text-muted f-w-400">Email: <?= $email ?></h6>
                                    </div>

                                    <div class="col-sm-4 text-end">
                                        <p class="m-b-10 f-w-600">Birthday</p>
                                        <h6 class="text-muted f-w-400"><?= date("M d, Y", strtotime($birthDate)) ?></h6>
                                    </div>