<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="">Cập nhật blog</h4>
            <div class=""></div>
            <form class="forms-sample" action="save-update" method="post" enctype="multipart/form-data">
                <?php extract($info) ?>
                <div class="form-group">
                    <label for="exampleInputName1">Tiêu đề</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="tieu_de" value="<?php if(isset($tieu_de)) echo $tieu_de ?>">
                </div>

                <div class="form-group">
                    <label>ảnh minh họa</label>
                    <input type="file" name="anh_minh_hoa" class="form-control">
                    <img src="<?= ROOT_URL . IMG?><?php echo $anh_minh_hoa ?>" alt="" width="20%" class="my-5">
                </div>
               
                <div class="form-group">
                    <label for="exampleTextarea1">Nội dung</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="noi_dung"><?php if(isset($noi_dung)) echo $noi_dung ?></textarea>
                </div>
                <input type="hidden" name="ma_blog" value="<?php echo $ma_blog ?>">
                <button type="submit" class="btn btn-primary me-2">cập nhật</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
