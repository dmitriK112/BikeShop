<?php include("partials/header_others.php");
$db = new Database();
$bikes = $db->getBikesByType("SINGLE");
?>

<div class="bikes">
    <div class="road-sec">
        <h2>SINGLE SPEED BIKES</h2>

        <?php
        $count = 0;
        foreach ($bikes as $bike) {
            if ($bike['type'] === "SINGLE SPEED BIKES") {
                $count++;
                $class = '';
                if ($count % 4 === 3) $class = 'none2';
                if ($count % 4 === 0) $class = 'none1';
                ?>
                <a href="single.php?product_id=<?php echo $bike['id']; ?>">
                    <div class="bike <?php echo $class; ?>">
                        <img src="<?php echo htmlspecialchars($bike['image']); ?>" alt=""/>
                        <div class="bike-cost">
                            <div class="bike-mdl">
                                <h4><?php echo htmlspecialchars($bike['name']); ?>
                                    <span>Model: <?php echo htmlspecialchars($bike['model']); ?></span>
                                </h4>
                            </div>
                            <div class="bike-cart">
                                <a class="buy" href="single.php?product_id=<?php echo htmlspecialchars($bike['id']); ?>">BUY NOW</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="fast-viw">
                            <a href="single.php?product_id=<?php echo htmlspecialchars($bike['id']); ?>">Quick View</a>
                        </div>
                    </div>
                </a>
                <?php
            }
        }

        if ($count === 0) {
            echo "<p>No single speed bikes available.</p>";
        }
        ?>

        <div class="clearfix"></div>
    </div>
</div>

<?php include('partials/footer.php'); ?>
