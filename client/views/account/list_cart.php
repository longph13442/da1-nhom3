<div class="col-8 my-b">
    <div class="title">
        <h3>Danh Sách hóa đơn</h3>
    </div>
    <div class="row">
        <div class="table">
            <table class="table-bordered  text-center table 5" style="width: 100%">
                <thead>
                    <tr>
                        <th class="col-2 py-3">Đơn Hàng</th>
                        <th class="col-4">Ngày</th>
                        <th class="col-3">Trạng Thái</th>
                        <th class="col-3">Tổng Cộng</th>
                        <th class="col-2">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hoadon as $hd) : ?>
                        <tr>
                            <td scope="row"><?= $hd['ten_sp'] ?></td>
                            <td><?= $hd['ngay_tao'] ?></td>
                            <td><?php
                                if ($hd['tinhtrang'] == 0) {
                                    echo "Đang Xử lý";
                                } else if ($hd['tinhtrang'] == 1) {
                                    echo "Đang chuẩn bị";
                                } else if ($hd['tinhtrang'] == 2) {
                                    echo "Đang giao hàng";
                                } else if ($hd['tinhtrang'] == 3) {
                                    echo "Giao hàng thành công";
                                } else {
                                    echo "Đã bị hủy";
                                }
                                ?></td>
                            <td><?= $hd['tongtien'] ?></td>
                            <td><a class="text-decoration-none btn btn-outline-danger" href="<?= ROOT_URL ?>account/cart/details?id_hoadon=<?= $hd['id_hoadon']; ?>">Xem</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
</div>