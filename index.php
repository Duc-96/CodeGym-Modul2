<?php
session_start();
define('FILE_CHUA', dirname(__FILE__));

if (isset($_GET['action'])) {
    $actionName = $_GET['action'];
} else {
    $actionName = 'home';
}
if (isset($_GET['controller'])) {
    $controllerName = $_GET['controller'];
} else {
    $controllerName = 'home';
}



if ($controllerName == 'home') {
    include FILE_CHUA . '/controller/HomeController.php';
    $objHomeController = new HomeController();

    switch ($actionName) {
        case 'home':
            $objHomeController->home();
            break;
        case 'product':
            $objHomeController->product();
            break;
        case 'chitietxe':
            $objHomeController->chitiet();
            break;
        case 'lognUp':
            $objHomeController->lognUp();
            break;
        case 'lognIn':
            $objHomeController->lognIn();
            break;
        case 'lognOutAdmin':
            $objHomeController->lognOutAdmin();
            break;
        case 'lognInAdmin':
            $objHomeController->lognInAdmin();
            break;
    }
}
if ($controllerName == 'admin') {
    include FILE_CHUA . '/controller/ManageController.php';
    $viewManage = new ManageController();
    $viewManage->Manage();

    if ($actionName == 'timsanpham') {
        include FILE_CHUA . '/controller/ProductController.php';
        $objProductController = new ProductController();
        $objProductController->search();
    }
}
if ($controllerName == 'user') {
    include FILE_CHUA . '/controller/UserController.php';
    $objUserController = new UserController();

    if ($actionName == 'list') {
        $objUserController->listUser();
    }
    if ($actionName == 'timkiem') {
        $objUserController->search();
    }
    if ($actionName == 'add') {
        $objUserController->add();
    }
    if ($actionName == 'update') {
        $objUserController->update();
    }
    if ($actionName == 'delete') {
        $objUserController->delete();
    }
}
if ($controllerName == 'product') {
    include FILE_CHUA . '/controller/ProductController.php';
    $objProductController = new ProductController();

    if ($actionName == 'list') {
        $objProductController->listProduct();
    }
    if ($actionName == 'timsanpham') {
        $objProductController->search();
    }
    if ($actionName == 'add') {
        $objProductController->add();
    }
    if ($actionName == 'update') {
        $objProductController->update();
    }
    if ($actionName == 'delete') {
        $objProductController->delete();
    }
}
if ($controllerName == "giohang") {
    include FILE_CHUA . '/controller/OrderController.php';
    $objOrderController = new OrderController();

    if($actionName =='themgiohang'){
        $objOrderController->gioHang();
    }

    if($actionName =='xemgiohang'){
        $objOrderController->xemGioHang();
    }
    if($actionName=='muahang'){
        $objOrderController->muaHang();
    }
    if($actionName=='thanhtoan'){
        $objOrderController->thanhToan();
    }
    if($actionName=='thanhtoanmuangay'){
        $objOrderController->thanhToanMuaNgay();
    }
}
