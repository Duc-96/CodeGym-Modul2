<link href="https://vinfastfake.000webhostapp.com/view/order/thanhtoan.css" rel="stylesheet" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class='container'>
    <div class='window'>
        <div class='order-info'>
            <div class='order-info-content'>
                <h2>Sản phẩm </h2>
                <div class='line'></div>
                <table class='order-table'>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <h5>Tên sản phẩm</h5>
                            </td>
                            <td>
                                <h5>Giá bán</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src='<?= $thanhtoanmuangay['hinhanh'] ?>' class='full-width'></img>
                            </td>
                            <td>
                                <br> <span class='thin'><?= $thanhtoanmuangay['tensanpham'] ?></span>

                            </td>
                            <td>
                                <br> <span class='thin'><?= $thanhtoanmuangay['giaban'] ?></span>

                            </td>
                        </tr>
                    </tbody>
                </table>

                </tbody>
                </table>

                <div class='total'>
                    <span style='float:left;'>
                        <div class='thin dense'>Tạm Tính</div>
                        <div class='thin dense'>Thuế VAT 20%</div>
                        <div class='thin dense'>Phí vận chuyển</div>
                        Tổng thanh toán
                    </span>
                    <?php
                    $tamtinh = $thanhtoanmuangay['giaban'];
                    $tamtinh = str_replace('.', '', $tamtinh);
                    $thue = ($tamtinh * 20) / 100; 
                    $phivanchuyen = ($tamtinh * 1) / 100;
                    $tongtien = $tamtinh + $thue + $phivanchuyen;

                    ?>
                    <span style='float:right; text-align:right;'>
                        <div class='thin dense'> <?= number_format($tamtinh) . 'đ'; ?></div>
                        <div class='thin dense'><?= number_format($thue) . 'đ'; ?></div>
                        <div class='thin dense'><?= number_format($phivanchuyen) . 'đ'; ?></div>
                        <?= number_format($tongtien) . 'đ'; ?>
                    </span>
                </div>
            </div>
        </div>
        <div class='credit-info'>
            <div class='credit-info-content'>
                <div>
                    <h2>Thông tin giao hàng</h2>
                </div>
                Họ tên người nhận
                <input class='input-field'></input>
                Số điện thoại
                <input class='input-field'></input>
                <table class='half-input-table'>
                    <tr>
                        <td> Tỉnh/Thành Phố
                            <select name="" id="" class='input-field'>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Tp.Hồ Chí Minh">Tp.Hồ Chí Minh</option>
                                <option value="Hà Nội">Hà Nội</option>
                            </select>
                        </td>
                        <td>Quận/huyện
                            <input class='input-field'></input>
                        </td>
                    </tr>
                </table>
                Thôn/xã
                <input class='input-field'></input>
                <button class='pay-btn'>Thanh toán</button>

            </div>

        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>