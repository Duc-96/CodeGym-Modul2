<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://vinfastfake.000webhostapp.com/view/order/giohang.css" rel="stylesheet" />

<h2 class="text-center">Đã Thêm Vào Giỏ Hàng</h2>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Tên sản phẩm</th>
                <th style="width:8%">Số lượng</th>
                <th style="width:22%" class="text-center">Giá</th>
                <th style="width:10%"> </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                <img src="<?= $getId['hinhanh'] ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?= $getId['tensanpham'] ?></h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Quantity">1
                    </td>
                    <td data-th="Subtotal" class="text-center"><?= $getId['giaban'] ?>VND</td>
                    
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><a href="index.php?controller=home&action=product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                
                <td><a href="index.php?controller=giohang&action=xemgiohang" class="btn btn-success btn-block">Xem giỏ hàng <i class="fa fa-angle-right"></i></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>