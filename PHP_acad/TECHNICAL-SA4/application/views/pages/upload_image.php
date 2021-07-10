<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Change Image</h6>
<?php echo $error; ?>

<?php echo form_open_multipart('proile/upload_image'); ?>
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