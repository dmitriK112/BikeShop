<?php
include 'partials/header_others.php';
$db = new Database();
$pd = new Product($db);
$auth = new Authenticate($db);
$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : null;
$product = $pd->find($product_id);
//if ($product_id === null) {
    //header("Location: index.php");
//}
//var_dump($product);
if(!$pd->getGetSizes($product_id)){
    $link = "product_id=".$product_id;
}
elseif(isset($_GET['product_id']) && isset($_GET['size'])) {
    $link = "product_id=".$product_id."&size=".$_GET['size'];
}
$popBikes = $db->getPopularProducts(3);
$fishText = "Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra."
?>
<div class="product">
    <div class="container">
        <div class="ctnt-bar cntnt">
            <div class="content-bar">
                <div class="single-page">
                    <div class="product-head">
                        <a href="index.php">Home</a> <span>::</span>
                    </div>
                    <!--Include the Etalage files-->
                    <link rel="stylesheet" href="css/etalage.css">
                    <script src="js/jquery.etalage.min.js"></script>
                    <script>
                        jQuery(document).ready(function($){

                            $('#etalage').etalage({
                                thumb_image_width: 350,
                                thumb_image_height: 200,
                                source_image_width: 1050,
                                source_image_height: 600,
                                show_hint: true,
                                click_callback: function(image_anchor, instance_id){
                                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                                }
                            });

                        });
                    </script>
                    <!--//details-product-slider-->
                    <div class="details-left-slider">
                        <div class="grid images_3_of_2">
                            <ul id="etalage">
                                <li>
                                    <a>
                                        <img class="etalage_thumb_image" src="<?php echo $product['image'] ?>" class="img-responsive" />
                                        <img class="etalage_source_image" src="<?php echo $product['image'] ?>" class="img-responsive" title="" />
                                    </a>
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="<?php echo $product['image'] ?>" class="img-responsive" />
                                    <img class="etalage_source_image" src="<?php echo $product['image'] ?>" class="img-responsive" title="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="details-left-info">
                        <h3><?php echo $product['name']?></h3>
                        <h4>Model No: <?php echo $product['model']?></h4>
                        <h4></h4>
                        <p><label>$</label> <?php echo $product['price']?></p>
                        <p class="size">SIZE ::</p>
                        <?php if($pd->getGetSizes($product_id)){?>
                        <a class="length" href="single.php?product_id=<?php echo $product_id?>&size=s">S</a>
                        <a class="length" href="single.php?product_id=<?php echo $product_id?>&size=m">M</a>
                        <a class="length" href="single.php?product_id=<?php echo $product_id?>&size=l">L</a>
                        <?php }else{?>
                        <a class="length" href="#">ONE SIZE</a>
                        <?php }?>
                        <?php if($auth->isLoggedIn()){?>
                        <div class="btn_form">
                            <a href="add-to-cart.php?<?php echo $link?>&quantity=1&buy_now=0">ADD TO CART</a>
                            <a href="add-to-cart.php?<?php echo $link?>&quantity=1&buy_now=1">BUY NOW</a>
                        </div>
                        <?php }else{?>
                            <h4></h4>
                            <h4><a href="login.php" class="total-item">log in </a>to add the item to your cart</h4>
                        <?php }?>
                        <div class="bike-type">
                            <p>TYPE  ::<a href="#"><?php echo $product['type']?></a></p>
                            <p>BRAND  ::<a href="#"><?php echo $product['brand'] ?? "Default brand"?></a></p>
                        </div>
                        <h5>Description  ::</h5>
                        <p class="desc"><?php echo $product['description'] ?? $fishText?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="single-bottom2">
            <h6>Popular Products</h6>
            <?php foreach ($popBikes as $popBike) { ?>
            <div class="product">
                <div class="product-desc">
                    <div class="product-img product-img2">
                        <img src="<?php echo $popBike['image']?>" class="img-responsive " alt=""/>
                    </div>
                    <div class="prod1-desc">
                        <h5><a class="product_link" href="single.php?product_id=<?php echo $popBike['id']?>"><?php echo $popBike['name']?></a></h5>
                        <p class="product_descr"> <?php echo $popBike['description'] ?? $fishText?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="product_price">
                    <span class="price-access">$<?php echo $popBike['price']?></span>
                    <a class="button1" href="single.php?product_id=<?php echo $popBike['id']?>&quantity=1"><span>Add to cart</span></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
include 'partials/footer.php';
?>