<?php
require_once "header.php";
require_once "profile.php"
?>
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
<?php require_once "footer.php" ?>
