<?php
include_once  'DBConnection.php';
class Product extends DBConnection
{
    public $tensanpham;
    public $ngaynhap;
    public $giaban;

    public function add($addProduct)
    {
        $connect = $this->connect();
        $tensanpham = $addProduct['tensanpham'];
        $ngaynhap = $addProduct['ngaynhap'];
        $giaban = $addProduct['giaban'];
        $sql = "INSERT INTO sanpham(tensanpham,ngaynhap,giaban) VALUES (
            '$tensanpham',
            '$ngaynhap',
            '$giaban'
        )";
        mysqli_query( $connect , $sql ) or die( mysqli_error( $connect ) );
        // $query = mysqli_query($connect, $sql);
    }

    public function totalPage()
    {
        $connect = $this->connect();
        $sqlProduct = "SELECT * FROM sanpham ";
        $productAll = mysqli_query($connect,$sqlProduct);
        $totalProduct = mysqli_num_rows($productAll);
        $soProductTrenTrang = 5; // số sản phẩm trên 1 trang
        $totalPage = ceil($totalProduct/$soProductTrenTrang);
        return $totalPage;
    }
    public function listProduct($soPage){ // $soPage: Trang hiện tại
        $connect = $this->connect();
        $soProductTrenTrang = 5; // số sản phẩm trên 1 trang
        $offset = ($soPage-1)*$soProductTrenTrang;
        $sql = "SELECT * FROM sanpham ORDER BY id ASC LIMIT $soProductTrenTrang OFFSET $offset";
        $query = mysqli_query($connect, $sql);
        $product = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $product[] = $row;
        }
        return $product;
    }

    public function idProduct($id)
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM sanpham WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
        return mysqli_fetch_assoc($query);
    }
    public function update($id, $product)
    {
        $connect = $this->connect();
        $tensanpham = $product['tensanpham'];
        $ngaynhap = $product['ngaynhap'];
        $giaban = $product['giaban'];
        $chitiet = $product['chitiet'];
       
        $sql = "UPDATE sanpham SET tensanpham ='$tensanpham' ,ngaynhap='$ngaynhap',giaban='$giaban',chitiet='$chitiet' WHERE id ='$id'";
        $query = mysqli_query($connect, $sql);
    }
    public function delete($id)
    {
        $connect = $this->connect();
        $sql = "DELETE FROM sanpham WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
    }
    
    public function searchData($key)
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM sanpham WHERE tensanpham REGEXP '$key' ORDER BY id ASC";
        $query = mysqli_query($connect, $sql);
        $product = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $product[] = $row;
        }
        return $product;
        
    }
}
