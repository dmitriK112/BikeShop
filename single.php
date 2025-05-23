<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("partials/header_others.php");
?>
<!--/banner-->
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
					thumb_image_width: 400,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
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
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/m1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/m1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/m2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/m4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m4.jpg"class="img-responsive"  />
							</li>
						</ul>
						</div>
					 </div>
					 <div class="details-left-info">
							<h3>SCOTT SPARK</h3>
								<h4>Model No: 3498</h4>
							<h4></h4>
							<p><label>$</label> 300 <a href="#">Click for offer</a></p>
							<p class="size">SIZE ::</p>
							<a class="length" href="#">XS</a>
							<a class="length" href="#">M</a>
							<a class="length" href="#">S</a>
							<div class="btn_form">
								<a href="cart.php">buy now</a>
								<a href="cart.php">ADD TO CART</a>
							</div>
							<div class="bike-type">
							<p>TYPE  ::<a href="#">MOUNTAIN BIKE</a></p>
							<p>BRAND  ::<a href="#">SPORTS SCOTTY</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc">The first mechanically-propelled, two-wheeled vehicle may have been built by Kirkpatrick MacMillan, a Scottish blacksmith, in 1839, although the claim is often disputed. He is also associated with the first recorded instance of a cycling traffic offense, when a Glasgow newspaper in 1842 reported an accident in which an anonymous "gentleman from Dumfries-shire... bestride a velocipede... of ingenious design" knocked over a little girl in Glasgow and was fined five
							The word bicycle first appeared in English print in The Daily News in 1868, to describe "Bysicles and trysicles" on the "Champs Elysées and Bois de Boulogne.</p>
					 </div>
					 <div class="clearfix"></div>				 	
				  </div>
			  </div>
		  </div>
		  <div class="single-bottom2">
			  <h6>Related Products</h6>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="images/s1.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.php">Road Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$300.51</span>								
							<a class="button1" href="cart.php"><span>Add to cart</span></a>
					 </div>
						<div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="images/s2.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.php">Mountain Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$1500.51</span>								
							<a class="button1" href="cart.php"><span>Add to cart</span></a>
					 </div>
				  <div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="images/s3.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.php">Single Speed Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$800.51</span>								
							<a class="button1" href="cart.php"><span>Add to cart</span></a>
					 </div>
				 <div class="clearfix"></div>
			  </div>
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

