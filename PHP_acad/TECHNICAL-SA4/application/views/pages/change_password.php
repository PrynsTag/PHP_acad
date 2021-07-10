<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Reset Password</h6>
<form action="<?= base_url() ?>profile/change_password" method="post">
  <div class="form-floating mb-2">
    <input aria-describedby="emailHelp" class="form-control"
           id="currPassInput"
           name="currPass"
           placeholder="Current Password"
           required="required"
           type="password">
    <label for="currPassInput" class="form-label">
      Enter Current Password
    </label>
  </div>

  <div class="form-floating mb-2">
    <input class="form-control" id="newPassInput" name="newPass"
           placeholder="New Password" required="required" type="password">
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