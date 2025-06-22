<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("partials/header_others.php");
$db = new Database();
$parts = $db->getParts();
?>
<!--/banner-->
<div class="parts">
    <div class="container">
        <h2>BIKE-PARTS ALL</h2>
        <div class="bike-parts-sec">
            <div class="bike-parts">
                <div class="top">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#"> / </a></li>
                        <li><a href="#">parts</a></li>
                    </ul>
                </div>
                <div class="bike-apparels">
                    <div class="parts1">
                        <?php foreach ($parts as $part) {?>
                        <a href="single.php?product_id=<?php echo $part['id']; ?>"><div class="part-sec">
                                <img src="<?php echo $part['image']?>" alt=""/>
                                <div class="part-info">
                                    <a href="#"><h5><?php echo $part['name']?><span>$<?php echo $part['price']?></span></h5></a>
                                    <a class="add-cart" href="single.php?product_id=<?php echo $part['id']; ?>">Quick View</a>
                                    <a class="qck" href="single.php?product_id=<?php echo $part['id']; ?>">BUY NOW</a>
                                </div>
                            </div></a>
                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="rsidebar span_1_of_left">
                <section  class="sky-form">
                    <div class="product_right">
                        <h3 class="m_2">Categories</h3>
                        <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
                            <option value="0">Frames</option>
                            <option value="1">Back Packs</option>
                            <option value="2">Frame Bags</option>
                            <option value="3">Panniers </option>
                            <option value="4">Saddle Bags</option>
                        </select>
                        <select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
                            <option value="1">Body Armour</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                            <option value="1">Tools</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                            <option value="1">Services</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                            <option value="1">Materials</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                    </div>

                    <h4>components</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Frames(20)</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foks, Suspensions (48)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Breaks and Pedals (45)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tires,Tubes,Wheels (45)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Serevice Parts(12)</label>
                        </div>
                    </div>
                    <h4>Apparels</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Locks (20)</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Speed Cassette (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bike Pedals (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Handels (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (50)</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Brand</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lezyne</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Marzocchi</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>EBC</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jagwire</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Yeti Cycles</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vee Rubber</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Price</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<?php
include('partials/footer.php');
?>
<!---->

</body>
</html>


