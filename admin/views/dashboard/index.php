<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php if (isset($slhh)) {
                        echo $slhh;
                    } ?></h3>
                </h3>
                <p>Hàng Hóa</p>
            </div>
            <div class="icon">
                <i class="fal fa-truck"></i>

            </div>
            <a href="<?= ROOT_URL ?>products" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php if (isset($sldh)) {
                        echo $sldh;
                    } ?></h3>

                <p>Đơn Hàng</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i></i>
            </div>
            <a href="<?= ROOT_URL ?>order" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php if (isset($slkh)) {
                        echo $slkh;
                    } ?></h3>

                <p>Khách Hàng</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= ADMIN_URL ?>user" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?=
                    date(" H:i:s");
                    ?></h3>
                <p></p>
                <p>Đồng Hồ</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><?= date("Y-m-d") ?></a>
        </div>
    </div>
    <!-- ./col -->
</div>

<div class="d-flex">
    <div class="col-md-6">
        <!-- USERS LIST -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thành Viên Quản Lý Website</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="users-list clearfix ">
                    <?php foreach ($member as $mb) : ?>
                        <li>
                            <img src="<?= ROOT_URL . IMG ?>customer.jpg" width="30" height="30" alt="User Image">
                            <a class="users-list-name" href="#"><?= $mb['ho_ten'] ?></a>
                            <span class="users-list-date"><?php
                                                            if ($mb['vai_tro'] == 0) {
                                                                echo 'Khách Hàng';
                                                            } elseif ($mb['vai_tro'] == 1) {
                                                                echo "Quản Trị Viên";
                                                            } elseif ($mb['vai_tro'] == 3) {
                                                                echo "Nhân Viên";
                                                            }
                                                            ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!--/.card -->
    </div>
    <div class="col-md-6">
        <!-- USERS LIST -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Khách hàng mới</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="users-list clearfix ">
                    <?php foreach ($membernew as $mb) : ?>
                        <li>
                            <img src="<?= ROOT_URL . IMG ?>customer.jpg" width="30" height="30" alt="User Image">
                            <a class="users-list-name" href="#"><?= $mb['ho_ten'] ?></a>
                            <span class="users-list-date"><?php
                                                            if ($mb['vai_tro'] == 0) {
                                                                echo 'Khách Hàng';
                                                            } elseif ($mb['vai_tro'] == 1) {
                                                                echo "Quản Trị Viên";
                                                            } elseif ($mb['vai_tro'] == 3) {
                                                                echo "Nhân Viên";
                                                            }
                                                            ?></span>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
        <!--/.card -->
    </div>
</div>
<div class="card">
    <div class="card-header border-transparent">
        <h3 class="card-title">Đơn hàng mới nhât</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Sản Phẩm</th>
                        <th>Trạng Thái</th>
                        <th>Tổng Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dh as $d) : ?>
                        <tr>
                            <td><a href="pages/examples/invoice.html"><?= $d['ma_don_hang'] ?></a></td>
                            <td><?= $d['ten_sp'] ?></td>
                            <td><span class="badge badge-success"><?php
                                                                    if ($d['tinh_trang'] == 1) {
                                                                        echo "Đang Xử Lý";
                                                                    } else if ($d['tinh_trang'] == 2) {
                                                                        echo "Đã Xác Nhận";
                                                                    } else if ($d['tinh_trang'] == 3) {
                                                                        echo "Đang Giao Hàng";
                                                                    } elseif ($d['tinh_trang'] == 4) {
                                                                        echo "Giao Hàng Thành Công";
                                                                    } else {
                                                                        echo "Đã Bị Hủy";
                                                                    }
                                                                    ?></span></td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?= number_format($d['giatien']) ?></div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="<?= ROOT_URL ?>order" class="btn btn-sm btn-secondary float-right">Xem tất cả</a>
    </div>
    <!-- /.card-footer -->
</div>