

<!DOCTYPE html>
<html lang="en">
<head>
<title>RHair Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="web templates" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/logo.jpg" alt=" " /><h1>R Hair<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
		<?php
            session_start();
            if(isset($_SESSION['user'])) {
                 echo '<a class="navbar-brand" href="#">Welcome' ." " . $_SESSION['user'].'</a>' ;
            }
            ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Human Hair Bundles<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.html"><i class="fa fa-angle-right" aria-hidden="true"></i>8"-14" Bundles</a></li>
												<li><a href="men.html"><i class="fa fa-angle-right" aria-hidden="true"></i>16"-20" Bundles</a></li>
												<li><a href="kids.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>22"-24" Bundles</a></li>
												<li><a href="party.html"><i class="fa fa-angle-right" aria-hidden="true"></i>26"-30" Bundles</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Closures</a></li>
												<li><a href="night.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Frontals</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.html"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Wig Caps<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blunt Cut Wigs</a></li>
												<li><a href="watches.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Straight Hair Wigs</a></li>
												<li><a href="cosmetics.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Bodywave and Wet Curl Wigs</a></li>
												<li><a href="deos.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Coloured Wigs</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.html"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="about.html" class="hyper"><span>About</span></a></li>
						<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						<li><a href="faq.html" class="hyper"><span>FAQ's</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner-agile">
	<div class="container">
		<h2>WELCOME TO</h2>
		<h3>R HAIR<span></span></h3>
		<p>We supply you with the best quality hair extensions and hair supplies. Shop and be guaranteed the best experience.</p>
	</div>
</div>
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="women.html"><div class="bb-left-agileits-w3layouts-inner">
					<h3>Human Hair</h3>
					<h4>Starts at<span>200</span></h4>
			</div></a>
		</div>
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="shoes.html"><div class="bb-left-agileits-w3layouts-inner">
				<h3>Ponytails</h3>
				<h4>save<span>10%</span></h4>
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="top-products">
	<div class="container">
		<h3>Top Products</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Cambodian Wet curls</span></li>
					<li class="resp-tab-item"><span>Wig Caps</span></li>
					<li class="resp-tab-item"><span>Hair Essentials</span></li>	
					<!--<li class="resp-tab-item"><span>Cosmetics</span></li>-->						
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/background2.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="24in Cambodian Wet Curls Per Bundle" /> 
									<input type="hidden" name="amount" value="350.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>24" Cambodian Wet Curls per bundle</h4>
							<h5>c350.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp2.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Black Fringe Cap" /> 
									<input type="hidden" name="amount" value="450.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>12" Black Fringe Cap</h4>
							<h5>c450.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp3.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="28in Brazillian Black Braided Ponytail" /> 
									<input type="hidden" name="amount" value="70.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>28" Brazillian Black Braided Ponytail</h4>
							<h5>c70.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp4.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="GOT2BYOU Glue Spray" /> 
									<input type="hidden" name="amount" value="40.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>GOT2BYOU Glue Spray</h4>
							<h5>c40.00</h5>						
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online free support</h4>
					<p>Contact us for advice on products or if you have any complaints.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Delivery</h4>
					<p>Delivery at a fee. International Shipping Available.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% money back</h4>
					<p>Refunds are accepted 2 days after purchase. Payment on delivery.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c1.png" alt=" " class="img-responsive" />
								<p>Founder of R Hair. 21 years old and Management Information Systems major at Ashesi University. Has dream of opening multiple branches of store around Ghana.</p>
								<h4>Ewura Abena Asmah</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c2.png" alt=" " class="img-responsive" />
								<p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
								<h4># Lucy</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="images/logo2.png" alt=" " /><h3>R Hair<span></span></h3></a>
		<ul>
			<li>Spintex Road</li>
			<li>Accra, Ghana</li>
			<li><a href="mailto:info@example.com">rhair@gmail.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="icons.html">Web Icons</a></li>
				<li><a href="typography.html">Typography</a></li>
				<li><a href="faq.html">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="jewellery.html">Human Hair Bundles</a></li>
				<li><a href="cosmetics.html">Wig Caps and Ponytails</a></li>
				<li><a href="Shoes.html">Hair Products</a></li>
				<li><a href="deos.html">Services</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<!--<li><a href="recommended.html">Recommended </a></li>
				<li><a href="payment.html">Payments</a></li>-->
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2020 RHair . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>

?>