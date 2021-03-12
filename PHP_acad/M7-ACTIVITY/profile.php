<?php
require_once "./dbConnection.inc";
require_once "header.php";

if (isset($_SESSION["username"], $conn) && $conn) {
    if (isset($_SESSION["password"])) {
        $user_password = $_SESSION["password"];
    }
    $user_username = $_SESSION["username"];
    $query = "SELECT * FROM `user/admin_database`.record WHERE username = '$user_username';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $username = sprintf("%s (%s)", $_SESSION["username"], $row["userlevel"]);
        $userLevel = $row["userlevel"];
        $email = $row["email"];
    }

    if (isset($_FILES["image"]["name"], $_POST["submit"])) {
        $filepath = "./img/" . $_FILES["image"]["name"];
    } else {
        $filepath = "https://img.icons8.com/bubbles/100/000000/user.png";
    }
}
?>
<link rel="stylesheet" href="css/profile.css">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <?php
                                    echo sprintf("<img src='%s' class='img-radius' height='100' width='100' alt='User-Profile-Image'>", $filepath);
                                    ?>
                                </div>
                                <h6 class="f-w-600 m-b-20"><?= $username ?></h6>
                                <?php
                                if ($userLevel === "admin") {
                                    echo '<h6><a href="viewuser.php">View Records</a></h6>';
                                    echo '<h6><a href="admin_add.php">Add Records</a></h6>';
                                    echo '<h6><a href="logout.php">Logout</a></h6>';
                                } else {
                                    echo '<h6><a href="logout.php">Logout</a></h6>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <?php
                                if ($userLevel === "admin") {
                                    echo '<h3 class="m-b-20 p-b-5 f-w-600">Admin Account</h3>';
                                } else {
                                    echo '<h3 class="m-b-20 p-b-5 f-w-600">User Account</h3>';
                                }
                                ?>
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?= $email ?></h6>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">User Level</p>
                                        <h6 class="text-muted f-w-400"><?= $userLevel ?></h6>
                                    </div>
                                </div>

                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Change Image</h6>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control form-control-sm" name="image" type="file"
                                                       id="formFile">
                                            </div>
                                            <div class="col">
                                                <input class="form-control form-control-sm" name="submit" type="submit"
                                                       value="upload">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Reset Password</h6>
                                <form action="reset.php" method="post"
                                      oninput='newPass.setCustomValidity(newPass.value !== cnewPass.value ? "New password and Re-Enter new password should be the same." : "")'>
                                    <div class="form-floating mb-2">
                                        <input type="password" name="currPass" class="form-control"
                                               id="currPassInput"
                                               aria-describedby="emailHelp" placeholder="Current Password"
                                               required="required">
                                        <label for="currPassInput" class="form-label">
                                            Enter Current Password
                                        </label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input type="password" name="newPass" class="form-control"
                                               id="newPassInput" placeholder="New Password" required="required">
                                        <label for="newPassInput" class="form-label fs-6">
                                            Enter New Password
                                        </label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input type="password" name="cnewPass" class="form-control"
                                               id="reEnterPassword" placeholder="Re-enter New Password"
                                               required="required">
                                        <label for="reEnterPassword" class="form-label">
                                            Re-enter New Password
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="resetPass" class="btn btn-primary btn-sm w-100">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>
