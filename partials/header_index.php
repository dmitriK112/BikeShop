<?php
require_once("_inc/autoload.php");
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Home :: w3layouts</title>
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
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<div class="banner-bg banner-bg1">
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
                            <li><a href="bicycles.php">FIXED / SINGLE SPEED</a></li>
                            <li><a href="bicycles.php">CITY BIKES</a></li>
                            <li><a href="bicycles.php">PREMIMUN SERIES</a></li>
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
                    <li class="dropdown1"><a href="404.php">EXTRAS</a>
                        <ul class="dropdown2">
                            <li><a href="404.php">CLASSIC BELL</a></li>
                            <li><a href="404.php">BOTTLE CAGE</a></li>
                            <li><a href="404.php">TRUCK GRIP</a></li>
                        </ul>
                    </li>
                    <a class="shop" href="cart.php"><img src="images/cart.png" alt=""/></a>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>