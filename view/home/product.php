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

    <title>Product</title>


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

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <?php include_once FILE_CHUA . "/view/home/layout_home/header.php" ?>
        <!-- end header section -->
        <!-- slider section -->
        <section class="product_section ">
            <div class="container">
                <div class="product_heading">
                    <h2>
                        Tất cả sản phẩm

                    </h2>
                </div>
            </div>
            <div class="product_container">
                <?php foreach ($product as $key => $value) : $id = $value['id'] ?>
                    <div class="box">
                        <div class="box-content">
                            <div class="img-box">
                                <img src=" <?= $value['hinhanh'] ?>" alt="">
                            </div>

                            <div class="detail-box">
                                <div class="text">
                                    <h6><?= $value['tensanpham'] ?></h6>
                                    <h5><?= $value['giaban'] ?> VND</h5>
                                </div>
                                <div class="like">
                                    <h6>
                                        Like
                                    </h6>
                                    <div class="star_container">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <button type=""><a href="index.php?controller=giohang&action=themgiohang&id=<?= $value['id'] ?>">Thêm vào giỏ hàng</a></button>
                                    </div>
                                    <div>
                                        <button type=""><a href="index.php?controller=home&action=chitietxe&xe=<?= $value['id'] ?>">Xem chi tiết...</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class='box-content'>
                                <button type=""><a href="index.php?controller=giohang&action=muahang&id=<?= $value['id'] ?>">Mua Ngay</a></button>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</body>

</html>