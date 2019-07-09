<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Royal Recipe Restaurant</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/menustyle.css" rel="stylesheet">
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

  <!--==========================
  Header
  ============================-->
  <header id="header">

     <div class="container">
      <div id="logo" class="pull-left menu-toggle">
        <a href="#" id="logoa"><img src="img/logo4.png" alt="logo" width="120%"></a>

      </div>

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
        </div>

  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slider/11.jpg" >
      </div>



      <div class="item">
        <img src="img/slider/16.jpg" >
      </div>

      <div class="item">
        <img src="img/slider/17.jpg" >
      </div>

      <div class="item">
        <img src="img/slider/12.jpg" >
      </div>

      <div class="item">
        <img src="img/slider/13.jpg" >
      </div>

      <div class="item">
        <img src="img/slider/14.jpg" >
      </div>

      <div class="item">
        <img src="img/slider/15.jpg" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- End OF Hero -->

  <!--==========================
    Intro Section
  ============================-->
<section id="rest">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>ROYAL RECIPE RESTAURANT</h1>
        <div class="line"></div>
      </div>
      <div class="col-lg-12">
        <p class="mainp">Our well talented crew always ready to give you a valuable service.
          Various Recipes around world wide are now available in our restaurant for your taste! </p>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1>WHY WE ARE SPECIAL</h1>
            <div class="line"></div>
        </div>
    </div>

      <div class="row">
          <div class="col-12 col-md-4">
              <div class="special" data-wow-delay="0.2s">
                    <div class="speicon" >
                        <img src="img/icons/friendlycrew.png">
                    </div>
                  <h2>Friendly Service</h2>
                  <p >Well experienced and talented workers make your work easy!</p>
              </div>
          </div>


          <div class="col-12 col-md-4">
              <div class="special" data-wow-delay="0.2s">
                  <div class="speicon" >
                      <img src="img/icons/onlneorder.png">
                  </div>
                  <h2>Order Online</h2>
                  <p >Online ordering system allows you to deliver foods to your doorsteps!</p>
              </div>
          </div>


          <div class="col-12 col-md-4">
              <div class="special" data-wow-delay="0.2s">
                  <div class="speicon" >
                      <img src="img/icons/tablebook.png">
                  </div>
                  <h2>Book a Table</h2>
                  <p >Book your table online and avoid any mistakes!</p>
              </div>
          </div>


  </div>


      <div class="row">
          <div class="col-12 col-md-4">
              <div class="special bot" data-wow-delay="0.2s">
                  <div class="speicon" >
                      <img src="img/icons/openhours.png">
                  </div>
                  <h2>Open Hours</h2>
                  <p >Everyday 8.00 A.M. to 10.00 P.M. opens for your service!</p>
              </div>
          </div>


          <div class="col-12 col-md-4">
              <div class="special bot" data-wow-delay="0.2s">
                  <div class="speicon" >
                      <img src="img/icons/lowcost.png">
                  </div>
                  <h2>Best Price</h2>
                  <p >Lowest price and high quality foods as your choice!</p>
              </div>
          </div>


          <div class="col-12 col-md-4">
              <div class="special bot" data-wow-delay="0.2s">
                  <div class="speicon" >
                      <img src="img/icons/fastdilivery.png">
                  </div>
                  <h2>Fast Delivery</h2>
                  <p >We bring your order immediately after order placed!</p>
              </div>
          </div>


      </div>

</div>
</section><!-- Section Intro End-->

<!-- Categories Section -----------------
---------------------------------------->

<section id="portfolio">
<div class="container wow fadeInUp marbot">
    <div class="row">
        <div class="col-lg-12">
            <h1>PICK FROM MENU</h1>
            <div class="line"></div>
        </div>
    </div>


    <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item">
            <a href="">
                <img src="img/categories/burger.jpg">
                <div class="details">
                    <h4>Burgers</h4>

                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
            <a href="">
                <img src="img/categories/family.jpg">
                <div class="details">
                    <h4>Family Meals</h4>

                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
            <a href="">
                <img src="img/categories/pizza.jpg">
                <div class="details">
                    <h4>Pizza</h4>

                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
            <a href="">
                <img src="img/categories/dessert.jpg">
                <div class="details">
                    <h4>Desserts</h4>

                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 padtop">
            <button class="button arrow">More Recipes</button>
        </div>
    </div>

</div>


</section>
<!-- Portfolio ending ---->

<!-- Book a table Section ----------------------------------
------------------------------------------------------------>

  <section id="table">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 tit">
                  <h1 class="table-quote">Don't waste your time.<br> Book Your Table Online!</h1>

              </div>

              <div class="col-sm-5 mid">
                  <button class="btn draw-border" onclick="window.location.href='php/checkbook.php'">BOOK NOW</button>
              </div>




          </div>



      </div>





  </section><!-- Book a table End --->


  <!-- Footer ------------------------------------
  ----------------------------------------------->

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







































  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->

</body>
</html>
