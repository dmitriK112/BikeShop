<?php
require_once("_inc/autoload.php");
$db = new Database();
$auth = new Authenticate($db);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Bicycles :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <!--webfont-->
    <!-- dropdown -->
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/scripts.js" type="text/javascript"></script>
    <!--js-->

</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<div class="banner-bg banner-sec">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""/></a>
            </div>
            <div class="top-nav">
                <label class="mobile_menu" for="mobile_menu">
                    <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                <ul class="nav">
                    <li class="dropdown1"><a href="bicycles.php">BICYCLES</a>
                        <ul class="dropdown2">
                            <li><a href="mountain-bikes.php">MOUNTAIN BIKES</a></li>
                            <li><a href="single-speed-bikes.php">SINGLE SPEED BIKES</a></li>
                            <li><a href="road-bikes.php">ROAD SERIES</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="parts.php">PARTS</a>
                        <ul class="dropdown2">
                            <li><a href="parts.php">CHAINS</a></li>
                            <li><a href="parts.php">TUBES</a></li>
                            <li><a href="parts.php">TIRES</a></li>
                            <li><a href="parts.php">DISC BREAKS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="accessories.php">ACCESSORIES</a>
                        <ul class="dropdown2">
                            <li><a href="accessories.php">LOCKS</a></li>
                            <li><a href="accessories.php">HELMETS</a></li>
                            <li><a href="accessories.php">ARM COVERS</a></li>
                            <li><a href="accessories.php">JERSEYS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1">
                        <?php
                        if ($auth->isLoggedIn()) {
                            echo '<a href="logout.php">LOGOUT</a>';
                            if($auth->getUserRole() == 0){
                                echo '</li>';
                                echo '<li class="dropdown1"><a href="admin.php">ADMIN</a>';
                            }
                            else{
                                echo '</li>';
                                echo '<li class="dropdown1"><a href="user-edit.php?id=' . htmlspecialchars($_SESSION['user_id']) . '">PROFILE</a></li>';

                            }
                        } else {
                            echo '<a href="login.php">LOGIN</a>';
                            echo '<ul class="dropdown2">';
                            echo '<li><a href="login.php">LOGIN</a></li>';
                            echo '<li><a href="registry.php">REGISTER</a></li>';
                            echo '</ul>';
                        }
                        ?>
                    </li>
                    <a class="shop" href="cart.php"><img src="images/cart.png" alt=""/></a>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
