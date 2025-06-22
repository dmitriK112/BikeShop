<?php include("partials/header_others.php");
$db = new Database();
$bikes = $db->getAllBikes();
?>

    <div class="bikes">
        <?php
        $categories = [
            'mountain-sec' => 'MOUNTAIN BIKES',
            'singlespeed-sec' => 'SINGLE SPEED BIKES',
            'road-sec' => 'ROAD BIKES'
        ];

        $bikeIndex = 0;

        foreach ($categories as $class => $title):
            ?>
            <div class="<?php echo $class; ?>">
                <h2><?php echo $title; ?></h2>

                <?php for ($i = 0; $i < 4; $i++): ?>
                    <?php if (!isset($bikes[$bikeIndex])) break; ?>
                    <?php $bike = $bikes[$bikeIndex++]; ?>

                    <a href="single.php?product_id=<?php echo $bike['id']; ?>">
                        <div class="bike <?php echo ($i == 2) ? 'none2' : (($i == 3) ? 'none1' : ''); ?>">
                            <img src="<?php echo $bike['image']; ?>" alt=""/>
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
                <?php endfor; ?>

                <div class="clearfix"></div>
            </div>
        <?php endforeach; ?>
    </div>

<?php include('partials/footer.php'); ?>