<div class="col-8">
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
                    <?php for ($i = 1; $i < 10; $i++) : ?>
                        <tr>
                            <td scope="row">P</td>
                            <td>11:34 Sáng 06/11/2021</td>
                            <td>Đang xử lý</td>
                            <td>0đ</td>
                            <td><a class="text-decoration-none btn btn-outline-danger" href="<?= ROOT_URL ?>account/cart/details">Xem</a></td>
                        </tr>
                    <?php endfor; ?>
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