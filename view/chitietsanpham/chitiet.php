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

    <title>Okeee</title>


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
<style>
    img{
        display: block; 
        margin-left: auto; 
        margin-right: auto;
    }
    h3{
        color: red;
    }
</style>
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <?php include_once FILE_CHUA . "/view/home/layout_home/header.php" ?>
        <!-- end header section -->
        <!-- slider section -->
        <section class="service_section">
            <div class='container'>
                <h3 style="text-align: center"> <?php echo $idProduct['tensanpham']; ?></h3>

                <img src=" <?= $idProduct['hinhanh'] ?>" alt="">
                

                <?php echo '<br>'; ?>
                <h8><?php echo $idProduct['chitiet']; ?></h8>
            </div>


        </section>

        <!-- end slider section -->
    </div>

</body>

</html>