<?php require_once "header.php"; ?>
<link rel="stylesheet" href="css/signup.css">
<div class="signup-form">
    <form action="./inc/signup.inc.php" method="post"
          oninput='password.setCustomValidity(password.value !== confirm_password.value ? "Passwords do not match." : "")'>
        <h2>Sign Up</h2>
        <p>Please fill in this form to create an account!</p>
        <hr>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name"
                                        required="required"></div>
                <div class="col"><input type="text" class="form-control" name="middle_name" placeholder="Middle Name"
                                        required="required"></div>
                <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                        required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                           required="required">
                </div>
                <div class="col">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"
                           required="required">
                </div>

            </div>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="birthday" placeholder="Birthday" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required="required">
        </div>
        <div class="form-group">
            <label class="form-check-label">
                <input type="checkbox" name="policy" required="required"> I accept the
                <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" name="signup" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
    <div class="hint-text">Already have an account? <a href="login.php">Login here</a></div>
</div>
<?php
require_once "./dbConnection.inc";

if (isset($conn) && $conn) {
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
    }
    $user_query = "SELECT * FROM user_database.user_information;";
//    WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($conn, $user_query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo "<table align='center' border='1' cellpadding='10'>";
        echo "<tr>";
        echo "<td>Full Name</td>";
        echo "<td>Username</td>";
        echo "<td>Password</td>";
        echo "<td>Birthday</td>";
        echo "<td>Email</td>";
        echo "<td>Contact number</td>";
        echo "</tr>";
        echo "<tr>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo sprintf("<td>%s %s %s</td>", $row["firstname"], $row["middlename"], $row["lastname"]);
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . date('M d, Y', strtotime($row["birthday"])) . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["contact number"] . "</td>";
            echo "</tr>";
            $_SESSION["username"] = $row["username"];
            $_SESSION["name"] = sprintf("<td>%s %s %s</td>", $row["firstname"], $row["middlename"], $row["lastname"]);
        }
    }
} else {
    die("Connection failed: " . mysqli_error($conn));
}

require_once "footer.php";
?>

