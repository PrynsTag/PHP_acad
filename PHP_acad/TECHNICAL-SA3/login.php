<?php require_once "header.php"; ?>
<link rel="stylesheet" href="css/login.css">
<div class="login-form">
    <form action="inc/login.inc.php" method="post">
        <h2 class="text-center">Log in</h2>
        <p class="info">Please fill in this form to login.</p>
        <hr>
        <div class="form-group">
            <input type="text" name="login-username" class="form-control" placeholder="Username"
                   required="required"
                   value="<?php if (isset($_COOKIE["remember_username"])) echo $_COOKIE["remember_username"]; ?>">
        </div>
        <div class="form-group">
            <input type="password" name="login-password" class="form-control" placeholder="Password"
                   required="required"
                   value="<?php if (isset($_COOKIE["remember_password"])) echo $_COOKIE["remember_password"]; ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label">
                <input type="checkbox" name="remember">
                Remember me
            </label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
    <div class="hint-text"><a href="signup.php">Create an Account</a></div>

</div>
<?php require_once "footer.php"; ?>
