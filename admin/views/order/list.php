<?php
//  require_once 'dao/order.php'; 
?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Danh sách đơn hàng</h4>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Mã đơn hàng
              </th>
              <th>
                Tên sản phẩm
              </th>
              <th>
                Tên Khách Hàng
              </th>
              <th>
                Số lượng
              </th>
              <th>
                Ảnh sản phẩm
              </th>
              <th>
                Giá tiền
              </th>
              <th>
                Ngày tạo
              </th>
              <th>
                Trạng thái đơn hàng
              </th>
              <th>
                Chức năng
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($od as $key) : ?>
              <?php extract($key) ?>
              <tr>
                <td class="py-1">
                  <?php echo $id ?>
                </td>
                <td>
                  <?php echo $ten_sp ?>
                </td>
                <td>
                  <?php echo $name ?>
                </td>
                <td>
                  <?php echo $quantyti ?>
                </td>
                <td style="max-width: 100px;">
                  <img src="<?= IMG . $anh_sp ?>" alt="" width="40%">
                </td>

                <td>
                  <?php echo number_format($giatien) ?>đ
                </td>
                <td>
                  <?php echo date('Y-m-d') ?>
                </td>
                <td>
                  <form action="order/update" method="post">
                    <div class="d-flex justify-content-between">
                      <select name="status" id="" class="form-control mx-2">

                        <option value="<?php echo $status ?>" selected><?php
                                                                        if ($status == 0) {
                                                                          echo 'Đang xử lí';
                                                                          echo '<br>';
                                                                        }
                                                                        if ($status == 1) {
                                                                          echo 'Đã xác nhận';
                                                                          echo '<br>';
                                                                        }
                                                                        if ($status == 2) {
                                                                          echo 'Đang giao hàng';
                                                                          echo '<br>';
                                                                        }
                                                                        if ($status == 3) {
                                                                          echo 'Giao hàng thành công';
                                                                          echo '<br>';
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
                  <!-- <a href="order/update?ma_don_hang=<?php echo $id ?>" class="btn btn-outline-danger"><i class="fal fa-edit"></i></a> -->
                  <a href="order/delete?id=<?php echo $id ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger float-end"><i class="fal fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>