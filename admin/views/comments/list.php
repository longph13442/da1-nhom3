<h3>Danh sách bình luận</h3>
<form action="" method="get">
    <div class="form-group col-3">
        <label for=""></label>
        <input type="text" name="keyword" value="<?php echo $keyword ?>" placeholder="Tìm kiếm......." id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
</form>
<div class="">
    <table class="table ">

        <thead>
            <tr>
                <th scope="col">Mã bình luận</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Mã tài khoản</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Đánh giá</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bl as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $ma_binh_luan ?></td>
                    <td><?php echo $ma_sp ?></td>
                    <td><?php echo $ma_tai_khoan ?></td>
                    <td><?php echo $noi_dung ?></td>
                    <td> <?php for ($i = 0; $i < $danh_gia; $i++) : ?>
                            <?php if ($i != '') : ?>
                              <i class="fas fa-star " style="color: brown;"></i>
                            <?php endif; ?>
                          <?php endfor; ?></td>
                    <td>
                        <!-- <a href="comments/edit?ma_loai=<?php echo $ma_loai?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a> -->
                        <a href="comments/delete?ma_binh_luan=<?php echo $ma_binh_luan?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>

</div>
