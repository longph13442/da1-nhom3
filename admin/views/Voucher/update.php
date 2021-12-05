<div class="d-flex justify-content-center">
    <div class="row col-lg-6 ">
        <h3 class="mb-3">Cập nhật voucher</h3>
        <span class="text-danger text-uppercase"><?php if (isset($error) && ($error != "")) echo $error;  ?></span>
        <form method="post" action="">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?= $vc['id'] ?>" placeholder="Auto">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên voucher</label>
                <input type="text" name="tenvoucher" value="<?= $vc['tenvoucher'] ?>" class="form-control" id="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số tiền giảm</label>
                <input type="number" class="form-control" name="sotien" value="<?= $vc['sotien'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng</label>
                <input type="number" class="form-control" name="soluong" value="<?= $vc['soluong'] ?>">
            </div>

            <input type="reset" name="" value="Hủy" class="btn btn-danger">
            <input type="submit" name="voucherupdate" value="Cập nhật" class="btn btn-primary">

        </form>
    </div>
</div>