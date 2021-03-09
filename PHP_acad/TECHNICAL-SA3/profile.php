<?php
require_once "./dbConnection.inc";
require_once "header.php";

if (isset($_SESSION["username"], $conn) && $conn) {
    if (isset($_SESSION["password"])) {
        $user_password = $_SESSION["password"];
    }
    $user_username = $_SESSION["username"];
    $query = "SELECT * FROM user_database.user_information WHERE username = '$user_username';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $fullname = sprintf("%s %s %s", $row["firstname"], $row["middlename"], $row["lastname"]);

        $date = date('M d, Y', strtotime($row["birthday"]));
        $email = $row["email"];
        $contact = $row["contact number"];
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
                                <div class="m-b-25"><img src="https://img.icons8.com/bubbles/100/000000/user.png"
                                                         class="img-radius" alt="User-Profile-Image"></div>
                                <h6 class="f-w-600"><?= $fullname ?></h6>
                                <?php
                                if (strpos($fullname, "Prince") !== false) {
                                    echo '<p>Web Developer / Programmer</p> ' .
                                        '<i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?= $email ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?= $contact ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Birthday</p>
                                        <h6 class="text-muted f-w-400"><?= $date ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Reset Password</h6>
                                <form action="reset.php" method="post"
                                      oninput='newPass.setCustomValidity(newPass.value !== cnewPass.value ? "New password and Re-Enter new password should be the same." : "")'>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">
                                            Enter Current Password
                                            <input type="password" name="currPass" class="form-control"
                                                   id="exampleInputPassword1"
                                                   aria-describedby="emailHelp" required="required">
                                        </label>
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputPassword1" class="form-label fs-6">
                                            Enter New Password
                                            <input type="password" name="newPass" class="form-control"
                                                   id="exampleInputPassword2" required="required">
                                        </label>

                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">
                                            Re-enter New Password
                                            <input type="password" name="cnewPass" class="form-control"
                                                   id="exampleInputPassword2" required="required">
                                        </label>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="resetPass" class="btn btn-primary btn-sm btn-block">
                                            Reset Password
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
