<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("_inc/autoload.php");
$db = new Database();
$contact = new Contact($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //print_r($_POST);
    if ($contact->create($name, $surname, $email, $message)) {
        header("Location: 404.php");
        exit;
    } else {
        echo "Error creating contact.";
    }
}
include("partials/header_index.php");
?>
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>HANDMADE BICYCLE</h1></li>
								<li><h1>SPEED BICYCLE</h1></li>	
								<li><h1>MOUINTAIN BICYCLE</h1></li>	
						  </ul>
						  <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
						  <a class="morebtn" href="bicycles.php">SHOP BIKES</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->
<div id="cate" class="categories">
	 <div class="container">
		 <h3>CATEGORIES</h3>
		 <div class="categorie-grids">
			 <a href="bicycles.php"><div class="col-md-4 cate-grid grid1">
				 <h4>FIXED / SINGLE SPEED</h4>
				 <p>Are you ready for the 27.5 Revloution ?</p>
				 <a class="store" href="bicycles.php">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.php"><div class="col-md-4 cate-grid grid2">
				 <h4>PREMIMUM SERIES</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="bicycles.php">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.php"><div class="col-md-4 cate-grid grid3">
				 <h4>CITY BIKES</h4>
				 <p>Street Playground</p>
				 <a class="store" href="bicycles.php">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<div class="bikes">	
		 <h3>POPULAR BIKES</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <img src="images/bik1.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>FIXED GEAR<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
				 <li>
				 <img src="images/bik2.jpg" alt=""/>
				 <div class="bike-info">
						 <div class="model">
							 <h4>BIG BOY ULTRA<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="images/bik3.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>ROCK HOVER<span>$300.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
				 <li>
				     <img src="images/bik4.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="images/bik5.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>JETT MAC<span>$340.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
				 <li>
				      <img src="images/bik6.jpg" alt=""/>
					  <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="bicycles.php">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="bicycles.php">Quick View</a>
					 </div>
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	</div>
</div>
<!---->
<div class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
        <p>Please contact us for all inquiries and purchase options.</p>
        <form method="post" action="">
            <input type="text" placeholder="NAME" id="name" name="name" required="">
            <input type="text" placeholder="SURNAME" id="surname" name="surname" required="">
            <input class="user" type="text" placeholder="USER@DOMAIN.COM" id="email" name="email" required=""><br>
            <textarea placeholder="MESSAGE" id="question" name="message"></textarea>
            <input type="submit" value="SEND">
        </form>
	</div>
</div>
<!---->
<?php
include('partials/footer.php');
?>
<!---->

