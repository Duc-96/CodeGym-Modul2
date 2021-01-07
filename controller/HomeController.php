<?php
include FILE_CHUA . '/model/Home.php';
class HomeController
{
    public function home()
    {
        include FILE_CHUA . '/view/home/home.php';
    }
    public function product()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $objHome = new Home();
            $product = $objHome->product();
            include FILE_CHUA . '/view/home/product.php';
        }
    }
    public function chitiet()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['xe'];
            $getId = new Home();
            $idProduct = $getId->chitiet($id);
            include FILE_CHUA . '/view/chitietsanpham/chitiet.php';
        }
    }

    public function lognUp()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $objUser = new Home();
            $userKhachHang = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'fullname' => $_POST['fullname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'birthday' => $_POST['birthday']
            ];
            $objUser->lognUp($userKhachHang);
        }
        include FILE_CHUA . '/view/user/lognUp.php';
    }

    public function lognIn()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $objUser = new Home();
            $userKhachHang = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
            ];
            $objUser->lognIn($userKhachHang);
            header('Location: index.php?controller=home&action=product');
        }
        include FILE_CHUA . '/view/user/lognIn.php';
    }
    public function lognInAdmin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $objUser = new Home();
            $userAdmin = [
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ];
            $objUser->lognInAdmin($userAdmin);
            header("Location: ./index.php?controller=admin");
            exit;
        }
        include FILE_CHUA . '/view/user/lognInAdmin.php';
    }
    public function lognOutAdmin()
    {
        unset($_SESSION['username']);
        header("location:index.php?controller=home&action=lognInAdmin");
        exit();
    }
}
