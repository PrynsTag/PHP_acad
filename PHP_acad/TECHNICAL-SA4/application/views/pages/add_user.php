<?= link_tag("assets/css/signup.css") ?>
<div class="signup-form">
    <form action="<?= base_url() . "profile/add_user" ?>" method="post">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../../profile_panel.php">Admin Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
        </nav>
        <h2>Add User</h2>
        <p>Please fill in this form to create a user!</p>
        <hr>
        <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
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
            <input type="date" class="form-control" name="date" placeholder="Birthday" required="required">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>

        <div class="form-group">
            <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required="required">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <select class="form-select" name="user_level" id="floatingSelect"
                                aria-label="Floating label select user level">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <label for="floatingSelect">Select User Level</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating">
                        <select class="form-select" name="status" id="floatingSelect"
                                aria-label="Floating label select user level">
                            <option value="active">Active</option>
                            <option value="disable">Disable</option>
                        </select>
                        <label for="floatingSelect">Select Status</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-check-label">
                <input type="checkbox" name="policy" required="required"> I accept the
                <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-primary w-100">Save</button>
        </div>
    </form>
    <div class="hint-text">Already have an account? <a href="../../../login.php">Login here</a></div>
</div>
<?php require_once "footer.php"; ?>

