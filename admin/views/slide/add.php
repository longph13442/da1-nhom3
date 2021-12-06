<div class="d-flex justify-content-center">
  <div class="row col-lg-6 ">
    <h3 class="mb-3">Thêm mới slide</h3>
    <span class="text-danger text-uppercase"><?php if (isset($error) && ($error != "")) echo $error;  ?></span>
    <form action="save-add" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="" class="form-label">Mã </label>
        <input type="text" name="id" class="form-control" id="" disabled placeholder="Auto">

      </div>
      <div class="mb-3">
        <label for="" class="form-label">Slide</label>
        <input type="file" name="img" id="" class="form-control" required>

      </div>
   
      <input type="reset" name="" value="Hủy" class="btn btn-danger">
      <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary">
    </form>
    <!-- <form method="post" action="save-add" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="" class="form-label">Mã </label>
        <input type="text" name="id" class="form-control" id="" disabled placeholder="Auto">

      </div>
      <div class="mb-3">
        <label for="" class="form-label">Slide</label>
        <input type="file" name="slide" id="" class="form-control">

      </div>

      <input type="reset" name="" value="Hủy" class="btn btn-danger">
      <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary">

    </form> -->
  </div>
</div>