<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="">Thêm mới blog</h4>
            <div class=""></div>
            <form class="forms-sample" action="save-add" method="post" enctype="multipart/form-data">
              
                <div class="form-group">
                    <label for="exampleInputName1">Tiêu đề</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="" name="tieu_de">
                </div>

                <div class="form-group">
                    <label>ảnh minh họa</label>
                    <input type="file" name="anh_minh_hoa" class="form-control">
     
                </div>
               
                <div class="form-group">
                    <label for="exampleTextarea1">Nội dung</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="noi_dung" ></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary me-2">thêm mới</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
