<link rel="stylesheet" href="./css/editaddress.css">
<div class="editaddress">
    <div class="title-address">
        <h3>Địa Chỉ Thanh Toán</h3>
    </div>
    <form action="">
        <div class="form-group">
            <label for="">Họ Và Tên</label>
            <br>
            <input type="text" name="">
        </div>
        <div class="form-group">
            <label for="">Địa Chỉ Nhận Hàng</label>
            <br>
            <input type="text" name="">
        </div>
        <div class="form-group">
            <label for="">Tỉnh / Thành Phố</label>
            <select name="calc_shipping_provinces" required="">
                <option value="">Tỉnh / Thành phố</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Quận/Huyện</label>
            <br>
            <select name="calc_shipping_district" required="">
                <option value="">Quận / Huyện</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Phường/Xã</label>
            <br>
            <select name="calc_shipping_ward" required="">
                <option value="">Phường / Xã</option>
            </select>

        </div>
        <div class="savelocation">
            <button type="submit" name="btnsvlocation">Lưu Địa Chỉ</button>

        </div>
    </form>
</div>
<!-- Jquery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
<script src="../../JS/location.js"></script>