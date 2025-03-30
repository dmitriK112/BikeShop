<!DOCTYPE html>
<html>
<head>
    <title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Thank you :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
        <?php
        include("partials/header.php");
        ?>
    </div>
</div>
<!--/banner-->
<div class="404-page">
    <div class="container">
        <div class="error-head">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $contact_name = $_POST['name'];
                $contact_question = $_POST['question'];

                if(empty($contact_name)) {
                    echo "";
                } else{
                    echo "<h2>$contact_name, thank you for contacting us.</h2>";
                    echo "<h2>Your message: '$contact_question' is very important for us. </h2>";
                }
            }
            ?>
            <a href="index.php">Go Back</a>
        </div>
    </div>
</div>
<!---->
<?php
include("partials/footer.php");
?>
<!---->

</body>
</html>
