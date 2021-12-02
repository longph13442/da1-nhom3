<div class="col-12 grid-margin stretch-card mb-5 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thêm mới sản phẩm</h4>
  
            <form class="forms-sample" action="save-add" method="post" enctype="multipart/form-data" >
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Tên sản phẩm</label>
                    <input type="text" name="ten_sp" class="form-control" id="" placeholder="Nhập tên sản phẩm..." required value="<?php echo $ten_sp?>">
                    <span class="text-danger text-uppercase mt-2" ><?php if(isset($error['ten_sp'])&&($error['ten_sp']!="")) echo $error['ten_sp']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail3">Đơn giá</label>
                    <input type="number" name="giatien" class="form-control" id="" placeholder="Nhập đơn giá..." required value="<?php echo $giatien?>">
                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['giatien'])&&($error['giatien']!="")) echo $error['giatien']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword4">Giảm giá</label>
                    <input type="number" name="giamgia" class="form-control" min="0" max="100"  id="" placeholder="Nhập giảm giá (0 - 100)%" value="<?php echo $giamgia?>">
                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['giamgia'])&&($error['giamgia']!="")) echo $error['giamgia']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleSelectGender">Loại hàng</label>
                    
                    <select class="form-control" name="ma_loai" id="exampleSelectGender">
                        <?php foreach($ct as $item): ?>
                            <?php extract($item);  ?>
                        <option value="<?php  echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleSelectGender">Đặc biệt</label>
                    <select class="form-control" name="dacbiet" id="exampleSelectGender">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select>
                </div>
                
                <div class="form-group mb-2">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="anh_sp" class="form-control" />

                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['anh_sp'])&&($error['anh_sp']!="")) echo $error['anh_sp']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputCity1">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" id="" placeholder="Nhập số lượng..." required value="<?php echo $soluong?>">
                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['soluong'])&&($error['soluong']!="")) echo $error['soluong']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleTextarea1">Mô tả ngắn</label>
                    <textarea class="form-control" name="mota"  rows="2" required > <?php if(isset($error['mota'])) echo $mota?></textarea>
                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['mota'])&&($error['mota']!="")) echo $error['mota']?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleTextarea1">Mô tả dài</label>
                    <textarea class="form-control" name="mota_dai" id="exampleTextarea1" rows="4" required ><?php if(isset($error['mota_dai'])) echo $mota_dai?></textarea>
                    <span class="text-danger text-uppercase mt-2"><?php if(isset($error['mota_dai'])&&($error['mota_dai']!="")) echo $error['mota_dai']?></span>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary me-2 my-2">Thêm mới</button>
                <button type="cancel" class="btn btn-light my-2">Hủy</button>
            </form>
        </div>
    </div>
</div>