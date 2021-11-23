<div class="title">
    <h3>Quản Lý Tài Khoản</h3>
</div>
<form action="" method="get">
    .<div class="form-group col-3">
        <label for=""></label>
        <input type="text" name="keyw" value="<?php echo $keyw ?>" placeholder="Tìm kiếm......." id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
</form>
<hr>
<div class="table">
    <a href="user/add" class="btn btn-warning text-white"><i class="fal fa-user-plus"></i> Thêm Tài Khoản</a>

    <table class="table text-center table-responsive">
        <thead class="">
            <tr>
                <th>STT</th>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Vai Trò</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $index => $us) : ?>
                <tr>
                    <td scope="row"><?= $index + 1  ?></td>
                    <td><?= $us['ho_ten'] ?></td>
                    <td><?= $us['sdt'] ?></td>
                    <td><?= $us['dia_chi'] ?></td>
                    <td><?= $us['vai_tro'] == 1 ? 'Quản Trị Viên' : 'Khách Hàng' ?></td>
                    <td class="mx-3">
                        <?php if ($us['vai_tro'] != 1) : ?>
                            <?php if ($us['trang_thai'] == 0) : ?>
                                <a onclick="confrim_lock('<?= ADMIN_URL ?>user/lock?ma_tai_khoan=<?= $us['ma_tai_khoan'] ?>','<?= $us['ho_ten'] ?>')" class="btn btn-outline-danger" href="javascript:;"><i class="fad fa-lock-open-alt"></i></a>
                            <?php else : ?>
                                <a onclick="confrim_unlock('<?= ADMIN_URL ?>user/unlock?ma_tai_khoan=<?= $us['ma_tai_khoan'] ?>','<?= $us['ho_ten'] ?>')" href="javascript:;" class="btn btn-danger"><i class=" fas fa-lock"></i></a>
                            <?php endif; ?>
                        <?php endif; ?>

                        <a class="btn btn-outline-warning" href="<?= ADMIN_URL ?>user/edit?ma_tai_khoan=<?= $us['ma_tai_khoan'] ?>"><i class="far fa-edit"></i></a>
                        <?php if ($us['vai_tro'] != 1) : ?>
                            <a href="javascript:;" onclick="confrim_remove('<?= ADMIN_URL . 'user/delete?ma_tai_khoan=' . $us['ma_tai_khoan'] ?>', '<?= $us['ho_ten'] ?>')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- </table> -->
    <!-- Phân Trang -->
    <div class="paging">
        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                    <li class="page-item">
                        <a class="page-link" href="user?pg=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

            </ul>
        </nav>
    </div>
</div>