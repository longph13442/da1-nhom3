<div class="d-flex justify-content-center">
    <div class="row col-lg-6 ">
        <h3 class="mb-3">Thêm mới voucher</h3>
        <form method="post" action="">
            <div class="mb-3">
                <label for="" class="form-label">Mã voucher</label>
                <input type="text" class="form-control" id="" disabled placeholder="Auto">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tên voucher</label>
                <input type="text" name="tenvoucher" value="<?= isset($tenvoucher) ? $tenvoucher : '' ?>" class="form-control" id="">
            </div>
            <?php if (isset($error['tenvoucher'])) : ?>
                <span class="text-danger"> <?php echo $error['tenvoucher'] ?></span>
            <?php endif; ?>
            <div class="mb-3">
                <label for="" class="form-label">Số tiền giảm</label>
                <input type="number" class="form-control" value="<?= isset($sotien) ? $sotien : '' ?>" name="sotien">
            </div>
            <?php if (isset($error['sotien'])) : ?>
                <span class="text-danger"> <?php echo $error['sotien'] ?></span>
            <?php endif; ?>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng</label>
                <input type="number" class="form-control" value="<?= isset($soluong) ? $soluong : '' ?>" name="soluong">
            </div>
            <?php if (isset($error['soluong'])) : ?>
                <span class="text-danger"> <?php echo $error['soluong'] ?></span>
            <?php endif; ?>
            <br>
            <input type="reset" name="" value="Hủy" class="btn btn-danger">
            <input type="submit" name="voucheradd" value="Thêm mới" class="btn btn-primary">

        </form>
    </div>
</div>