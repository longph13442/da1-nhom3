<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh sách blog</h4>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã blog</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Ảnh minh họa</th>
                            <th>Ngày tạo</th>
                            <th>Mã tài khoản</th>
                            <th class="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bl as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?php echo $ma_blog ?></td>
                                <td><?php echo $tieu_de ?></td>
                                <td class="chroma" ><?php echo $noi_dung ?></td>
                                <td><img src="<?= IMG.$anh_minh_hoa ?>" alt="" width="50%"></td>
                                <td><?php echo $ngay_tao ?></td>
                                <td><?php echo $ma_tai_khoan ?></td>
                                <td>
                                    <a href="admin-blog/update?ma_blog=<?php echo $ma_blog ?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                                    <a href="admin-blog/delete?ma_blog=<?php echo $ma_blog ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>