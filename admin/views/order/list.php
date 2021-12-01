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
                Mã sản phẩm
              </th>
              <th>
                Mã tài khoản
              </th>
              <th>
                Số lượng
              </th>
              <th>
                Ảnh sản phẩm
              </th>
              <th>
                Tên sản phẩm
              </th>
              <th>
                Giá tiền
              </th>
              <th>
                Ngày tạo
              </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($od as $key) : ?>
              <?php extract($key) ?>
              <tr>
                <td class="py-1">
                  <?php echo $ma_don_hang ?>
                </td>
                <td>
                  <?php echo $ma_sp ?>
                </td>
                <td>
                  <?php echo $ma_tai_khoan ?>
                </td>
                <td>
                  <?php echo $so_luong ?>
                </td>
                <td style="max-width: 100px;">
                  <img src="<?= IMG . $anh_sp ?>" alt="" width="40%">
                </td>
                <td>
                  <?php echo $ten_sp ?>
                </td>
                <td>
                  <?php echo $giatien ?>
                </td>
                <td>
                  <?php echo $ngay_tao ?>
                </td>
                <td>
                  <a href="order/delete?ma_don_hang=<?php echo $ma_don_hang ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>