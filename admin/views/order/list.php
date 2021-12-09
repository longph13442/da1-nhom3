<?php
//  require_once 'dao/order.php'; 
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Danh sách đơn hàng</h4>
      <br>
      <form action="" method="get">
        <input type="text" class="form-control col-4" name="keysearch" placeholder="Tìm Kiếm theo khách hàng...." id="">
      </form>
      <br>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-2">
                Tên Khách Hàng
              </th>
              <th class="col-1">
                Mã đơn hàng
              </th>
              <th class="col-1">
                Tên sản phẩm
              </th>
              <th>
                Số lượng
              </th>
              <th class="col-1">
                Ảnh sản phẩm
              </th>
              <th class="col-1">
                Giá tiền
              </th>
              <th class="col-1">
                Ngày tạo
              </th>
              <th class="col-3">
                Trạng thái đơn hàng
              </th>
              <th class="col-2">
                Chức năng
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($od as $key) : ?>
              <?php extract($key) ?>
              <tr>

                <td>
                  <?php echo $name ?>
                </td>
                <td class="py-1">
                  <?php echo $id ?>
                </td>
                <td>
                  <?php foreach ($odsp as $sp) : ?>
                    <?php echo trim(($sp['ten_sp'] . ','), ',') ?>
                  <?php endforeach; ?>
                </td>
                <td>
                  <?php foreach ($odsp as $sp) : ?>
                    <?php
                    echo $sp['tong'];
                    ?>
                  <?php endforeach; ?>
                </td>
                <td style="max-width: 100px;">
                  <img src="<?= IMG . $anh_sp ?>" alt="" width="40%">
                </td>

                <td>
                  <?php echo number_format($tongtien + $ship) ?> đ
                </td>
                <td>
                  <?php echo $date ?>
                </td>
                <td>
                  <form action="order/update" method="post">
                    <div class="d-flex justify-content-between">
                      <select name="status" id="" class="form-control mx-2">

                        <option value="<?php echo $status ?>" selected><?php
                                                                        if ($status == 0) {
                                                                          echo 'Đang xử lí';
                                                                          echo '<hr>';
                                                                        }
                                                                        if ($status == 1) {
                                                                          echo 'Đã xác nhận';
                                                                          echo '<hr>';
                                                                        }
                                                                        if ($status == 2) {
                                                                          echo 'Đang giao hàng';
                                                                          echo '<hr>';
                                                                        }
                                                                        if ($status == 3) {
                                                                          echo 'Giao hàng thành công';
                                                                          echo '<hr>';
                                                                        }

                                                                        ?>
                        </option>

                        <option value="0">Đang xử lí</option>
                        <option value="1">Đã xác nhận</option>
                        <option value="2">Đang giao hàng</option>
                        <option value="3">Giao hàng thành công</option>
                      </select>
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <input type="submit" value="cập nhật" name="submit" class="btn btn-primary">
                    </div>
                  </form>
                </td>
                <td>
                  <a class="btn btn-outline-success" href="<?= ROOT_URL ?>order/updatecart?id=<?= $id ?>"><i class="fal fa-info-circle"></i></a>
                  <a href="<?= ROOT_URL ?>order/delete?id=<?php echo $id ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger "><i class="fal fa-trash-alt"></i></a>
                </td>
              </tr>

            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>