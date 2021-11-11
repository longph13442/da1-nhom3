<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/giohang.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 class="text-center">Giỏ hàng</h2>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Tên sản phẩm</th>
                    <th style="width:10%">Giá</th>
                    <th style="width:8%">Số lượng</th>
                    <th style="width:22%" class="text-center">Thành tiền</th>
                    <th style="width:10%"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="data:image/jpeg;base64,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"
                                    alt="Sản phẩm 1" class="img-responsive" width="100">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">Sản phẩm 1</h4>
                                <p>Mô tả của sản phẩm 1</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">200.000 đ</td>
                    <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                    </td>
                    <td data-th="Subtotal" class="text-center">200.000 đ</td>
                    <td class="actions" data-th="">
                        <button class="delete-btn"><a href="#">Xóa</a></button>
                    </td>
                </tr>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="https://xuconcept.com/wp-content/uploads/2020/12/chup-anh-my-pham.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">Sản phẩm 2</h4>
                                <p>Mô tả của sản phẩm 2</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">300.000 đ</td>
                    <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                    </td>
                    <td data-th="Subtotal" class="text-center">300.000 đ</td>
                    <td class="actions" data-th="">
                        <button class="delete-btn"><a href="#">Xóa</a></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Tổng 200.000 đ</strong>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục
                        mua hàng</a>
                    </td>
                    <td colspan="2" class="hidden-xs"> </td>
                    <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                    </td>
                    <td><a href="#" class="btn btn-success btn-block">Thanh toán <i
                            class="fa fa-angle-right"></i></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Arimo&display=swap');
    * {
        margin: 0;
        padding: 0;
    }
    
    body {
        margin: 0;
        font-family: 'Arimo', sans-serif;
    }
    
    .btn-success {
        background-color: red;
        border-color: red;
    }
    
    .btn-warning {
        background-color: rgb(0, 0, 0);
        border-color: rgb(0, 0, 0);
    }
    
    .delete-btn {
        padding: 8px;
        background-color: black;
        border: none;
        border-radius: 4px;
    }
    
    .delete-btn a {
        color: #ffff;
        text-decoration: none;
    }
    
    .delete-btn :hover {
        color: red;
    }
    
    .contenner {
        width: 1440px;
    }
</style>

</html>