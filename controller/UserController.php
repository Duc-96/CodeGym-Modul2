<?php
include_once FILE_CHUA . '/model/User.php';
class UserController
{


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $objUser = new User();
            $user = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'fullname' => $_POST['fullname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'birthday' => $_POST['birthday']
            ];
            $objUser->add($user);
            header('Location: index.php?controller=user&action=list&page=1');
            exit;
        }
        include FILE_CHUA . '/view/usermanage/add.php';
    }
    public function listUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $soPage = $_GET['page'];
            $_SESSION['page']=$soPage;
            $objUser = new User();
            $user = $objUser->listUser($soPage);


            $totalPage = $objUser->totalPage();

            include FILE_CHUA . '/view/usermanage/list.php';
        }
    }
    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $update = new User();
            $id = $_POST['id'];
            $soPage=$_SESSION['page'];
            $thongtinnguoidung = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'fullname' => $_POST['fullname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'birthday' => $_POST['birthday']
            ];
            $updateThongTin = $update->update($id, $thongtinnguoidung);
            header('Location: index.php?controller=user&action=list&page='.$soPage);
            exit;
        }

        $id = $_GET['id'];
        $objUser = new User();
        $idUser = $objUser->idUser($id);
        include FILE_CHUA . '/view/usermanage/update.php';
    }
    public  function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $idUser = $_GET['id'];
            $soPage=$_SESSION['page'];
            $getId = new User();
            $user = $getId->idUser($idUser);

            include FILE_CHUA . '/view/usermanage/delete.php';
        } else {
            $idUser = $_POST['id'];
            $delete = new User();
            $soPage=$_SESSION['page'];
            $delete->delete($idUser);
            header('Location: index.php?controller=user&action=list&page=1'.$soPage);
        }
    }
    public function search()
    {
        if (isset($_GET['tukhoa'])) {
            $key = $_GET['tukhoa'];
            $objUser = new User();
            $searchData = $objUser->searchData($key);

            include FILE_CHUA . '/view/usermanage/search_user.php';
        }
    }
    // public function phanTrang(){
    //    $phanTrang = new User();
    //    $user = $phanTrang->phanTrang();

    // }
}
