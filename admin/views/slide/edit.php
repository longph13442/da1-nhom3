<div class="d-flex justify-content-center">
    <div class="row col-lg-6 ">
        <h3 class="mb-3">Cập nhật slide</h3>
        <span class="text-danger text-uppercase"><?php if (isset($error['slide']) && ($error['slide'] != "")) echo $error['slide'];  ?></span>
        <form method="post" action="save-update" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Mã </label>
                <input type="text" name="id" class="form-control" id="" disabled placeholder="Auto" value="<?php echo $info['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Slide</label>
                <input type="hidden" name="hinhcu" value="<?= $info['img'] ?>">
                <input type="file" name="img" id="" class="form-control">
            </div>
            <div class="">
                <img src="<?= ROOT_URL . IMG ?><?php echo $info['img'] ?> " alt="" width="50%">
            </div>
            <input type="hidden" name="id" value="<?php echo $info['id'] ?>">

            <input type="reset" name="" value="Hủy" class="btn btn-danger">
            <input type="submit" name="submit" value="cập nhật" class="btn btn-primary">

        </form>

    </div>
</div>