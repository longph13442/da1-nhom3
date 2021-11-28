<div class="col-8">
    <div class="row">
        <div class="form">
            <div class="title">
                <h4>Địa chỉ</h4>
            </div>
            <form method="post" action="">
                <input type="hidden" name="ma_tai_khoan" value="<?= $khachhang['ma_tai_khoan'] ?>">
                <div class="form-group">
                    <br>
                    <textarea class="form-control" name="dia_chi" id="" cols="30" rows="5"><?= $khachhang['dia_chi'] ?></textarea>
                </div>
                <?php if (isset($error['dia_chi'])) : ?>
                    <span class="text-danger"> <?php echo $error['dia_chi']; ?></span>
                <?php endif; ?>
                <br>
                <div class="mb-3">
                    <button class="btn btn-warning" name="subdiachi" type="submit">Lưu địa chỉ</button>
                </div>
            </form>
        </div>
    </div>
</div>