<h3>Danh sách voucher</h3>
<br>
<div class="col-lg-8">
    <a href="voucher/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm Voucher</span> </a>
    <p></p>
    <table class="table ">

        <thead>
            <tr>
                <th scope="col">Mã Voucher</th>
                <th scope="col">Tên Voucher</th>
                <th>Số tiền giảm</th>
                <th>Số lượng</th>
                <th>Ngày Tạo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($voucher as $vc) : ?>
                <?php extract($vc) ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $tenvoucher ?></td>
                    <td><?php echo number_format($sotien) ?></td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $date ?></td>

                    <td>
                        <a href="voucher/update?id=<?php echo $id ?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="voucher/delete?id=<?php echo $id ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>