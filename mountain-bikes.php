<?php include("partials/header_others.php");
$db = new Database();
$bikes = $db->getBikesByType("MOUNTAIN");
?>

<div class="bikes">
    <div class="road-sec">
        <h2>MOUNTAIN BIKES</h2>

        <?php
        $count = 0;
        foreach ($bikes as $bike) {
            if ($bike['type'] === "MOUNTAIN BIKES") {
                $count++;
                // Определим CSS-класс в зависимости от позиции
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
                                <a class="buy" href="single.php?product_id=<?php echo $bike['id']; ?>">BUY NOW</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="fast-viw">
                            <a href="single.php?product_id=<?php echo $bike['id']; ?>">Quick View</a>
                        </div>
                    </div>
                </a>
                <?php
            }
        }

        // Если ни одного велосипеда не найдено
        if ($count === 0) {
            echo "<p>No mountain bikes available.</p>";
        }
        ?>

        <div class="clearfix"></div>
    </div>
</div>

<?php include('partials/footer.php'); ?>
