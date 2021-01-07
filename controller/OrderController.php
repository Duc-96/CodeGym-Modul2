<?php
include_once FILE_CHUA . '/model/Order.php';
class OrderController
{


    public function gioHang()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];

            $obj = new Order();
            $getId = $obj->get_order($id);
            // unset($_SESSION['sanpham']);
            // die();

            $_SESSION['sanpham'][$id] = $getId;
            include FILE_CHUA . '/view/order/giohang.php';
        }
    }

    public function xemGioHang()
    {
        
        if (!isset($_SESSION['sanpham'])) {
            echo "Chưa có sản phẩm nào";
        } else {
            $gioHang =$_SESSION['sanpham'] ;
            include FILE_CHUA . '/view/order/xemgiohang.php';
        }
    }
    public function muaHang()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $obj = new Order();
            $getId = $obj->get_order($id);
            $_SESSION['muangay'] = $getId;
            include FILE_CHUA . '/view/order/muahang.php';
        }
    }
    public function thanhToan(){
        $thanhtoan = $_SESSION['sanpham'];
        include FILE_CHUA . '/view/order/thanhtoan.php';
    }
    public function thanhToanMuaNgay(){
        $thanhtoanmuangay = $_SESSION['muangay'];
        include FILE_CHUA . '/view/order/thanhtoanmuangay.php';
    }
}
