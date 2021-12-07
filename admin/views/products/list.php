<h3>Danh sách sách sản phẩm</h3>
<form action="" method="get">
    <div class="form-group col-3">
        <label for=""></label>
        <input type="text" name="keyword" value="<?php if (isset($keyword) && ($keyword != '')) echo $keyword ?>" placeholder="Tìm kiếm......." id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
</form>
<div class="my-5">
    <a href="products/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm sản phẩm</span> </a>
    <table class="table text-center">
        <thead>
            <tr>
                <th class="col-1">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th class="col-2">Ảnh sản phẩm</th>
                <th class="col-1">Đơn giá</th>
                <th class="col-1">Giảm giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đặc biệt</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Mô tả dài</th>
                <th class="col-1">Ngày tạo</th>
                <th class="col-1">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($info as $index => $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $index + 1 ?></td>
                    <td style="font-weight: 600;"><?php echo $ten_sp ?></td>
                    <td style="width: 200px;"><img src="<?= IMG ?><?php echo $anh_sp ?>" alt="" width="30%"></td>
                    <td><?php echo number_format($giatien)  ?> đ</td>
                    <td><?php echo $giamgia ?>% (<?php $giatien -= ($giatien * $giamgia)/100; echo number_format($giatien) ?>đ)</td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $dacbiet ?></td>
                    <td><?php echo $luotxem ?></td>
                    <td>
                        <p style="width: 100px; overflow: hidden; text-overflow:ellipsis ; white-space: nowrap;"><?php echo $mota ?></p>
                    </td>
                    <td>
                        <p style="width: 100px; overflow: hidden; text-overflow:ellipsis ; white-space: nowrap;"><?php echo $mota_dai ?></p>
                    </td>
                    <td><?php echo $ngaytao ?></td>
                    <td>
                        <a href="products/update?ma_sp=<?php echo $ma_sp ?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="products/delete?ma_sp=<?php echo $ma_sp ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    <div class="paging">
        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                    <li class="page-item">
                        <a class="page-link" href="products?pg=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

            </ul>
        </nav>
    </div>
</div>