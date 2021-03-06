<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thống kê hàng hóa</h4>
            <p class="card-description">
                <!-- Add class <code>.table-bordered</code> -->
            </p>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Mã loại hàng
                            </th>
                            <th>
                                Tên loại hàng
                            </th>
                            <th>
                                Số lượng
                            </th>
                            <th>
                                Giá cao nhất
                            </th>
                            <th>
                                Giá thấp nhất
                            </th>
                            <th>
                                Giá trung bình
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tk as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td>
                                    <?php echo $ma_loai?>
                                </td>
                                <td>
                                    <?php echo $ten_loai ?>
                                </td>
                                <td>
                                    <?php echo $soluong ?>
                                </td>
                                <td>
                                    <?php echo number_format($gia_max);?> đ
                                </td>
                                <td>
                                    <?php echo number_format($gia_min);?> đ
                                </td>
                                <td>
                                    <?php echo number_format($gia_avg);?> đ
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="chart/sanpham"><input type="button" value="xem biểu đồ" class="btn btn-primary my-4"></a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card my-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thống kê bình luận</h4>
            <p class="card-description">
                <!-- Add class <code>.table-bordered</code> -->
            </p>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Mã sản phẩm
                            </th>
                            <th>
                                Tên sản phẩm
                            </th>
                            <th>
                                Số lượng bình luận
                            </th>
                            <th>
                                Bình luận cũ nhất 
                            </th>
                            <th>
                                Bình luận mới nhất
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bl as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td>
                                    <?php echo $ma_sp?>
                                </td>
                                <td>
                                    <?php echo $ten_sp ?>
                                </td>
                                <td>
                                    <?php echo $soluong ?>
                                </td>
                                <td>
                                    <?php echo $cu_nhat?>
                                </td>
                                <td>
                                    <?php echo $moi_nhat?>
                                </td>
                                
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="chart/binhluan"><input type="button" value="xem biểu đồ" class="btn btn-primary my-4"></a>
            </div>
        </div>
    </div>
</div>