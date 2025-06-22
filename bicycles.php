<?php
include("partials/header_others.php");
$db = new Database();
$bikes = $db->getAllBikes();
?>

<div class="bikes">
    <div class="mountain-sec">
        <h2>ALL BIKES</h2>
        <?php foreach ($bikes as $bike): ?>
            <a href="single.php?product_id=<?php echo $bike['id']; ?>">
                <div class="bike">
                    <a href="single.php?product_id=<?php echo $bike['id']; ?>">
                        <img src="<?php echo $bike['image']; ?>" alt=""/>
                    </a>
                    <div class="bike-cost">
                        <div class="bike-mdl">
                            <h4><?php echo $bike['name']; ?><span>Model:<?php echo $bike['model']; ?></span></h4>
                        </div>
                        <div class="bike-cart">
                            <a class="buy" href="single.php?product_id=<?php echo $bike['id']; ?>">BUY NOW</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="fast-viw">
                        <a href="single.php?product_id=<?php echo $bike['id']; ?>">Quick View</a>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        <div class="clearfix"></div>
    </div>
</div>


<?php include('partials/footer.php'); ?>
