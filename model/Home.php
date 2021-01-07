<?php
include_once 'DBConnection.php';
class Home extends DBConnection
{
    public $username;
    public $password;
    public $fullname;
    public $phone;
    public $email;
    public $birthday;

    public function lognUp($userKhachHang)
    {
        $connect = $this->connect();
        $username = $userKhachHang['username'];
        $password = $userKhachHang['password'];
        $fullname = $userKhachHang['fullname'];
        $phone = $userKhachHang['phone'];
        $email = $userKhachHang['email'];
        $birthday = $userKhachHang['birthday'];

        if (!$username || !$password || !$fullname || !$phone || !$email || !$birthday) {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $kiemTraTen = "SELECT username FROM khachhang WHERE username='$username'";
        if (mysqli_num_rows(mysqli_query($connect, $kiemTraTen)) > 0) {
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $kiemTraEmail = "SELECT email FROM khachhang WHERE email='$email'";
        if (mysqli_num_rows(mysqli_query($connect, $kiemTraEmail)) > 0) {
            echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $sql = "INSERT INTO khachhang(username,password,fullname,phone,email,birthday) VALUES (
            '$username',
            '$password',
            '$fullname',
            '$phone',
            '$email',
            '$birthday'
        )";
        $query = mysqli_query($connect, $sql);
    }
    public function lognIn($userKhachHang)
    {
        $connect = $this->connect();
        $username = $userKhachHang['username'];
        $password = $userKhachHang['password'];
        if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $sql = "SELECT username, password FROM khachhang WHERE username='$username'";
        $query = mysqli_query($connect, $sql);
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $row = mysqli_fetch_array($query);
        if ($password != $row['password']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $_SESSION['username'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công";
    }
    public function lognInAdmin($userAdmin)
    {
        $connect = $this->connect();
        $username = $userAdmin['username'];
        $password = $userAdmin['password'];
        $sql = "SELECT username, password FROM useradmin WHERE username='$username'";
        $query = mysqli_query($connect, $sql);
        if (mysqli_num_rows($query) == 0) {
            echo "Sai tên đăng nhập. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $row = mysqli_fetch_array($query);
        if ($password != $row['password']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $_SESSION['username'] = $username;
    }
    public function product()
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM sanpham ";
        $query = mysqli_query($connect, $sql);
        $product = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $product[] = $row;
        }
        return $product;
    }
    public function chitiet($id)
    {
        $connect = $this->connect();
        $sql = "SELECT * FROM sanpham WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
        return mysqli_fetch_assoc($query);
    }
      
}
