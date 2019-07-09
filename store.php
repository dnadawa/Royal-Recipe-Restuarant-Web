







<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<title>Menu</title>
		<link href="img/favicon.png" rel="icon">

 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
 		<link rel="stylesheet" href="css/font-awesome.min.css">
 		<link type="text/css" rel="stylesheet" href="css/menustyle.css"/>


<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
	<script src="js/main.js" type="text/javascript"></script>
	
	<script>
        $(document).ready(function( $ ) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function () {
                $('html, body').animate({scrollTop: 0}, 500);
                return false;
            });
        });
    </script>
		

    </head>
	<body>
	
		<header id="header">

<div class="container">
 <div id="logo" class="pull-left menu-toggle">
   <a href="#" id="logoa"><img src="img/logo4.png" alt="logo" width="120%"></a>

 </div>

   <nav id="nav-menu-container" class="navbar-expand-lg" >
   <ul class="nav-menu res" >
	 <li class="menu-active"><a href="index.html">Home</a></li>

	 <li class="menu-has-children"><a href="#">Menu</a>
	   <ul>
		 <li><a href="#">Burgers</a></li>
		 <li><a href="#">Snacks</a></li>
		 <li><a href="#">Pizza</a></li>
		 <li><a href="#">Buckets</a></li>
		 <li><a href="#">Family Meals</a></li>
		 <li><a href="#">Desserts</a></li>


	   </ul>
	 </li>



	 <li><a href="php/checkbook.php">Book A Table</a></li>
	 <li><a href="contact.html">Contact Us</a></li>
	 <li><a href="php/check.php"><img src="img/myacc2.png"> </a></li>
	 <li><a href="php/cart.php"><img src="img/cart3.png"> </a></li>
	
	 

   </ul>


 </nav><!-- #nav-menu-container -->
   </div>

</header><!-- #header -->
			

		

						

					
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
		
									
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Burgers</a></li>
						<li><a href="#">Snacks</a></li>
						<li><a href="#">Pizza</a></li>
						<li><a href="#">Buckets</a></li>
						<li><a href="#">Family Meals</a></li>
						<li><a href="#">Desserts & Others</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					</div>
					

				
			<div id="store" class="col-lg-12">
						

<!-- store products -->
						<div class="row">
							<!-- product -->

<?php
include('php/dbcon.php');

$sql = "SELECT * FROM foods";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	   $foodname=$row["FoodName"];
	   $image=base64_encode($row['Image']);
	 	$category=$row["Category"];
	   $price=$row["Price"];?>
	   
		<tr>
			<td>
			<div class="col-md-4 col-xs-6">
				<form action="php/sentcard.php" method="POST">
								<div class="product">
									<div class="product-img">
										<img src="data:image/jpeg;base64, <?php echo $image; ?>" alt="image">
										</div>
									<div class="product-body">
										<p class="product-category"><?php echo $category; ?></p>
										<h3 class="product-name"><?php echo $foodname; ?></h3>
										<h4 class="product-price">Rs.<?php echo $price; ?>.00</h4>
										<input type="hidden" name="foodname" value="<?php echo $foodname; ?>">
										<input type="hidden" name="cata" value="<?php echo $category; ?>">
										<input type="hidden" name="price" value="<?php echo $price; ?>">
											
									</div>
									<div class="add-to-cart">
										<input type="submit" class="add-to-cart-btn" value="Add to Cart">
										<!--button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button-->
									</div>
								</div>
								</form>
							</div>

			</td>
		</tr>




	   <?php
    }
}




?>







							
							<!-- /product -->


							<div class="clearfix visible-lg visible-md"></div>


							

							

						

						</div>
						<!-- /store products -->

					
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- FOOTER -->
		<footer id="footer">
      <div class="footer-top">
          <div class="container">

          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong>Royal Recipe Restaurant</strong>. All Rights Reserved!
          </div>
          <div class="credits">

              Designed by <a href="https://www.facebook.com/dulaj.nadawa" target="_blank    ">Dulaj Nadawa</a>
          </div>
      </div>
  </footer>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/menu.js"></script>

	</body>
</html>
