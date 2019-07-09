<?php
session_start();

$email=$_SESSION['email'];


?>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>


    <link href="../img/cart3.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


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
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
	<!--link href="../css/myreserve.css" rel="stylesheet"-->
	<link href="../css/menustyle.css" rel="stylesheet">

<style>
.containermain{
color:white;
padding:50px;

}

.form-group .input{
	color:white;
	background-color:transparent;
	
}

.title{
	color:white;
}



</style>





</head>

<?php
include('dbcon.php');
//session_start();
$uname=$_SESSION['uname'];
$email=$_SESSION['email'];
$add1=$_SESSION['add1'];
$add2=$_SESSION['add2'];
$mobile=$_SESSION['mobile'];

$foodname="";
$price="";
$quan="";
$subtot="";

$foodname=$_SESSION['fname'];
$price=$_SESSION['pri'];
$quan=$_SESSION['quan'];
$subtot=$_SESSION['subtot'];
$code=$_SESSION['code'];




//session_start();
//echo $_SESSION['fname'].$_SESSION["pri"];
//echo $foodname.$price;






?>





















<body background="../img/regback.jpg">

<div class="containermain">

	
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container second">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
							<form action="orderdone.php" method="POST">

							<h3 class="title">Order ID - <?php echo $code;?></h3><br><br>
								<h3 class="title">Billing address</h3>
								
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Name" value="<?php echo $uname;?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value="<?php echo $email;?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address1" placeholder="Address Line 1" value="<?php echo $add1;?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address2" placeholder="Address Line 2" value="<?php echo $add2;?>">
							</div>
							
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone" value="<?php echo $mobile;?>">
							</div>
							
						</div>
						<!-- /Billing Details -->

						
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>QUANTITY</strong></div>
								<div><strong>TOTAL(Rs.)</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div><?php echo $foodname;?></div>
									<div><?php echo $quan;?></div>
									<div><?php echo $price;?></div>
								</div>
								
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong><h1 style="color:white;">Rs.<?php echo $subtot;?>.00</h1></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1" checked>
								<label for="payment-1">
									<span></span>
									Cash On Delivery
								</label>
								<div class="caption">
									<p>Pay bill when order arrives.</p>
								</div>
							</div>


							<div class="input-radio" >
								<input type="radio" name="payment" id="payment-2" disabled>
								<label for="payment-2">
									<span></span>
									Credit/Debit Card(Coming Soon)
								</label>
								
							</div>
							
						</div>
						
						
						<center><input type="submit" class="primary-btn order-submit" value="Place Order"></center>
						<!--a href="orderdone.php" class="primary-btn order-submit">Place order</a-->
						</form>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		
</div>






            
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>





</body>





