<?php require_once "header.php"; ?>
<link rel="stylesheet" href="css/login.css">
<div class="login-form">
    <form action="include/login.inc.php" method="post">
        <h2 class="text-center">Log in</h2>
        <h3 class="text-center"> <?php
            if (isset($_GET["status"]) && $_GET["status"] !== "active") {
                echo "This account is disabled please contact the administrator";
            } ?> </h3>
        <p class="info">Please fill in this form to login.</p>
        <hr>

        <div class="form-group">
            <label class="w-100 mb-3">
                <input type="text" name="login-username" class="form-control" placeholder="Username"
                       required="required">
            </label>
        </div>

        <div class="form-group">
            <label class="w-100 mb-3">
                <input type="password" name="login-password" class="form-control" placeholder="Password"
                       required="required">
            </label>
        </div>

        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </div>

    </form>
    <div class="hint-text"><a href="admin_add.php">Create an Account</a></div>

</div>
<?php require_once "footer.php"; ?>
