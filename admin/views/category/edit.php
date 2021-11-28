<div class="d-flex justify-content-center">
  <div class="row col-lg-6 ">
    <h3 class="mb-3" >Cập nhật loại hàng</h3>
    <span class="text-danger text-uppercase"><?php if(isset($error)&&($error!=""))echo $error;  ?></span>
    <form method="post" action="save-edit?ma_loai=<?php echo $info['ma_loai'] ?>">
      <div class="mb-3">
        <label for="" class="form-label">Mã Loại hàng</label>
        <input type="text" class="form-control" id="" disabled value="<?php echo $info['ma_loai']; ?>">

      </div>
      <div class="mb-3">
        <label for="" class="form-label">Tên loại hàng</label>
        <input type="text" name="ten_loai" class="form-control" id="" required value="<?php echo $info['ten_loai']; ?>" >
       
      </div>

      <input type="reset" name="" value="Hủy" class="btn btn-danger">
      <input type="submit" name="submit" value="cập nhật" class="btn btn-primary">

    </form>
  </div>
</div>