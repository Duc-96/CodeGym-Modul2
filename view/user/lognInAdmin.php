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

    <title>Loginadmin</title>


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
    <link href="https://vinfastfake.000webhostapp.com/view/home/css/csslogin.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <?php include_once FILE_CHUA . "/view/home/layout_home/header.php" ?>
        <!-- end header section -->
        <!-- slider section -->
        <section class="product_section ">
            <div id="" action=''>
                <form method="POST" action="index.php?controller=home&action=lognInAdmin">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">
                            <!-- Tabs Titles -->

                            <!-- Icon -->
                            <div class="fadeIn first">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfmJO1vZOid-nPBHG4aMhenFmy5zW4qPg_-g&usqp=CAU" id="icon" alt="User Icon" />
                            </div>

                            <!-- Login Form -->
                            <form>
                                <input type="text" id="login" class="fadeIn second" name="username" placeholder="User Admin">
                                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                                <input type="submit" class="fadeIn fourth" value="Log In">
                            </form>

                            <!-- Remind Passowrd -->
                            <div id="formFooter">
                                <a class="underlineHover" href="#" title='Đăng nhập admin'>@Admin 2021</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <a href="http://dribbble.com/shots/1265587-Registration-Template-PSD?list=everyone" target="_blank"></a>

            <!-- end slider section -->
        </section>
    </div>


    
</body>

</html>