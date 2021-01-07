<?php
include_once  'DBConnection.php';
class Order extends DBConnection
{

    public function get_order($id)
    {
        $connect = $this->connect();
        $sql = "SELECT id,tensanpham,giaban,hinhanh FROM sanpham WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
        return mysqli_fetch_assoc($query);
    }
}
