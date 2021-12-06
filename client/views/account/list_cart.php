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
                        <th class="col-3">Gía tiền</th>
                        <th class="col-2">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hoadon as $hd) : ?>
                        <tr>
                            <td scope="row">
                                <?= $hd['ten_sp'], rtrim(',') ?>
                            </td>
                            <td><?= $hd['date'] ?></td>
                            <td><?php
                                if ($hd['status'] == 0) {
                                    echo "Đang Xử lý";
                                } else if ($hd['status'] == 1) {
                                    echo "Đã xác nhận";
                                } else if ($hd['status'] == 2) {
                                    echo "Đang giao hàng";
                                } else if ($hd['status'] == 3) {
                                    echo "Giao hàng thành công";
                                } else {
                                    echo "Đã bị hủy";
                                }
                                ?></td>
                            <td><?= $sum += $hd['price'] ?></td>
                            <td><a class="text-decoration-none btn btn-outline-danger" href="<?= ROOT_URL ?>account/cart/details?id=<?= $hd['id']; ?>">Xem</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                        <li class="page-item">
                            <a class="page-link" href="cart?pg=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                </ul>
            </nav>
        </div>
    </div>
</div>