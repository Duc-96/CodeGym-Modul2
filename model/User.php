<?php
include_once 'DBConnection.php';
class User extends DBConnection
{
    public $username;
    public $password;
    public $fullname;
    public $phone;
    public $email;
    public $birthday;

    public function add($addUser)
    {


        $connect = $this->connect();

        $username = $addUser['username'];
        $password = $addUser['password'];
        $fullname = $addUser['fullname'];
        $phone = $addUser['phone'];
        $email = $addUser['email'];
        $birthday = $addUser['birthday'];
        $sql = "INSERT INTO khachhang(username,password,fullname,phone,email,birthday) VALUES (
            '$username',
            '$password',
            '$fullname',
            '$phone',
            '$email',
            '$phone'
        )";
        if (!$username || !$password || !$fullname || !$phone || !$email || !$birthday) {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $kiemTraTen = "SELECT username FROM khachhang WHERE username='$username'";
        if (mysqli_num_rows(mysqli_query($connect, $kiemTraTen)) > 0) {
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $kiemTraEmail ="SELECT email FROM khachhang WHERE email='$email'";
        if (mysqli_num_rows(mysqli_query($connect,$kiemTraEmail)) > 0) {
            echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $query = mysqli_query($connect, $sql);
    }

    public function totalPage()
    {
        $connect = $this->connect();
        $sqlUser = "SELECT * FROM khachhang ";
        $userAll = mysqli_query($connect,$sqlUser);
        $totalUser = mysqli_num_rows($userAll);
        $soUserTrenTrang = 5;
        $totalPage = ceil($totalUser/$soUserTrenTrang);
        return $totalPage;
    }
    public function listUser($soPage){ // $soPage: Trang hiện tại
        $connect = $this->connect();
        $soUserTrenTrang = 5;
        $offset = ($soPage-1)*$soUserTrenTrang;
        $sql = "SELECT * FROM khachhang ORDER BY id ASC LIMIT $soUserTrenTrang OFFSET $offset";
        $query = mysqli_query($connect, $sql);
        $user = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $user[] = $row;
        }
        return $user;
    }

    public function idUser($id)
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM khachhang WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
        return mysqli_fetch_assoc($query);
    }
    public function update($id, $user)
    {

        $username = $user['username'];
        $password = $user['password'];
        $fullname = $user['fullname'];
        $email = $user['email'];
        $phone = $user['phone'];
        $birthday = $user['birthday'];

        $connect = $this->connect();
        $sql = "UPDATE khachhang SET username ='$username' ,password='$password',fullname='$fullname', email ='$email' , phone ='$phone',birthday = '$birthday'  WHERE id ='$id'";
        $query = mysqli_query($connect, $sql);
    }
    public function delete($id)
    {
        $connect = $this->connect();
        $sql = "DELETE FROM khachhang WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
    }
    public function searchData($key)
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM khachhang WHERE fullname REGEXP '$key' ORDER BY id ASC";
        $query = mysqli_query($connect, $sql);
        $user = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $user[] = $row;
        }
        return $user;
        
    }
}
