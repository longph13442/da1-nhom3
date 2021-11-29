<h3>Danh sách sách sản phẩm</h3>
<form action="" method="get">
    <div class="form-group col-3">
        <label for=""></label>
        <input type="text" name="keyword" value="<?php if(isset($keyword)&&($keyword!='')) echo $keyword ?>" placeholder="Tìm kiếm......." id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
</form>
<div class="my-5">
    <table class="table ">

        <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đặc biệt</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Mô tả dài</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($info as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $ma_sp ?></td>
                    <td style="font-weight: 600;"><?php echo $ten_sp ?></td>
                    <td style="width: 200px;"><img src="<?=IMG?><?php echo $anh_sp ?>" alt="" width="50%"></td>
                    <td><?php echo number_format($giatien)  ?> VNĐ</td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $dacbiet ?></td>
                    <td><?php echo $luotxem ?></td>
                    <td ><p style="width: 100px; overflow: hidden; text-overflow:ellipsis ; white-space: nowrap;"><?php echo $mota ?></p></td>
                    <td ><p style="width: 100px; overflow: hidden; text-overflow:ellipsis ; white-space: nowrap;"><?php echo $mota_dai ?></p></td>
                    <td><?php echo $ngaytao ?></td>
                    <td>
                        <a href="products/update?ma_sp=<?php echo $ma_sp?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="products/delete?ma_sp=<?php echo $ma_sp?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    <a href="products/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm sản phẩm</span> </a>
</div>
