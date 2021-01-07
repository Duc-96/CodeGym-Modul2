<?php
include_once FILE_CHUA . '/model/Product.php';
class ProductController
{


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $objProduct = new Product();
            $product = [
                'tensanpham' => $_POST['tensanpham'],
                'ngaynhap' => $_POST['ngaynhap'],
                'giaban' => $_POST['giaban'],

            ];
            $objProduct->add($product);
            header('Location: index.php?controller=product&action=list&page=1');
            exit;
        }
        include FILE_CHUA . '/view/productmanage/add.php';
    }
    public function listProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $soPage = $_GET['page'];
            $_SESSION['page']=$soPage;
            $objProduct = new Product();
            $product = $objProduct->listProduct($soPage);
            $totalPage = $objProduct->totalPage();
            include FILE_CHUA . '/view/productmanage/list.php';
        }
    }
    
    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $update = new Product();
            $id = $_POST['id'];
            $soPage=$_SESSION['page'];
            $thongtinsanpham = [
                'tensanpham' => $_POST['tensanpham'],
                'ngaynhap' => $_POST['ngaynhap'],
                'giaban' => $_POST['giaban']
            ];
            $updateSanPham = $update->update($id, $thongtinsanpham);
            header('Location: index.php?controller=product&action=list&page='.$soPage);
            exit;
        }

        $id = $_GET['id'];
        $objProduct = new Product();
        $idProduct = $objProduct->idProduct($id);
        include FILE_CHUA . '/view/productmanage/update.php';
    }
    public  function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $getId = new Product();
            $idProduct = $getId->idProduct($id);

            include FILE_CHUA . '/view/productmanage/delete.php';
        } else {
            $id = $_POST['id'];
            $xoa = new Product();
            $soPage=$_SESSION['page'];
            $xoa->delete($id);
            header('Location: index.php?controller=product&action=list&page='.$soPage);
            exit;
        }
    }
    
    
    public function search()
    {
        if (isset($_GET['tukhoa'])) {
            $key = $_GET['tukhoa'];
            $objProduct = new Product();
            $searchData = $objProduct->searchData($key);

            include FILE_CHUA . '/view/productmanage/search_product.php';
        }
    }
}
