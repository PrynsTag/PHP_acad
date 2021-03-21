<?php require_once "profile.php"; ?>
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
<?php
if (isset($_POST["submit"])) {
    $_SESSION["image"] = "./img/" . $_FILES["image"]["name"];
}
require_once "profile_footer.php";
?>