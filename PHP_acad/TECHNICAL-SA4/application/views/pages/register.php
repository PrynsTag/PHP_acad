<?= link_tag("assets/css/signup.css") ?>
<div class="signup-form">
  <form action="<?= base_url() ?>register/validation" method="post">
    <h2>
      <?php if (isset($title)) {
        echo $title;
      } ?>
    </h2>
    <p>Please fill in this form to create an account!</p>
    <?php
    if ($this->session->flashdata("message")) {
      echo "<div class='alert alert-success'>"
              . $this->session->flashdata("message") .
              "</div>";
    }
    ?>
    <hr>
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label class="w-100">
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
          </label>
        </div>
        <div class="col">
          <label class="w-100">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label class="w-100">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </label>
        </div>
        <div class="col">
          <label class="w-100">
            <select class="custom-select form-control" name="user-level">
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label class="w-100">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </label>
        </div>
        <div class="col">
          <label class="w-100">
            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
          </label>
        </div>

      </div>
    </div>
    <div class="form-group">
      <label class="w-100">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </label>
    </div>
    <div class="form-group">
      <label class="form-check-label">
        <input type="checkbox" name="policy" required="required"> I accept the
        <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
      <button type="submit" name="signup" class="btn btn-primary btn-block w-100">Sign Up</button>
    </div>
  </form>
  <div class="hint-text">Already have an account? <a href="<?= base_url() . "login" ?>">Login here</a></div>
</div>