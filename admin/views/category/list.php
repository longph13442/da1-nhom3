<h3>Danh sách loại hàng</h3>
<form action="" method="get">
    <div class="form-group col-3">
        <label for=""></label>
        <input type="text" name="keyword" value="<?php if(isset($keyword)&&($keyword!='')) echo $keyword ?>" placeholder="Tìm kiếm......." id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
</form>
<div class="col-lg-8">
    <table class="table ">

        <thead>
            <tr>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cate as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $ma_loai ?></td>
                    <td><?php echo $ten_loai ?></td>
                    <td>
                        <a href="category/edit?ma_loai=<?php echo $ma_loai?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="category/delete?ma_loai=<?php echo $ma_loai?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    <a href="category/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm Loại hàng</span> </a>
</div>
