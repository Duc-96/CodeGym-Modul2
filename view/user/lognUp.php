<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="https://vinfastfake.000webhostapp.com/view/home/images/fevicon/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>lognUp</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="https://vinfastfake.000webhostapp.com/view/home/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="https://vinfastfake.000webhostapp.com/view/home/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="https://vinfastfake.000webhostapp.com/view/home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="https://vinfastfake.000webhostapp.com/view/home/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://vinfastfake.000webhostapp.com/dangky/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://vinfastfake.000webhostapp.com/dangky/css/style.css">

</head>

<body>

    <div class="hero_area">
        <div>
            <!-- header section strats -->
            <?php include_once FILE_CHUA . "/view/home/layout_home/header.php" ?>
        </div>
        <!-- end header section -->
        <!-- slider section -->
        <div class='slider'>
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="https://vinfastfake.000webhostapp.com/dangky/images/signin-image.jpg" alt="sing up image"></figure>
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title" style="font-family:'Times New Roman';">Đăng ký tài khoản</h2>
                            <form method="POST" action="index.php?controller=home&action=lognUp" class="register-form" id="login-form">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username" id="your_name" placeholder="Tên đăng nhập" />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="your_pass" placeholder="Mật khẩu" />
                                </div>
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account-add"></i></label>
                                    <input type="text" name="fullname" id="your_name" placeholder="Họ và tên" />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-male-female"></i></label>
                                    <input type="text" name="birthday" id="your_pass" placeholder="Ngày sinh" />
                                </div>
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-phone"></i></label>
                                    <input type="text" name="phone" id="your_name" placeholder="Số điện thoại" />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="your_pass" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Chấp nhận điều khoản</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng ký" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>