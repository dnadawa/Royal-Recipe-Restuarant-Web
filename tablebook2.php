<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Book a Table - Royal Recipe Restaurant</title>
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
    <link href="css/tablebook.css" rel="stylesheet">
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


        $('#cb1').click(function () {
            if ($(this).is(":checked")) {
                $('#quan1').show();
            } else {
                $('#quan1').hide();
            }
        });

            $('#cb2').click(function () {
                if ($(this).is(":checked")) {
                    $('#quan2').show();
                } else {
                    $('#quan2').hide();
                }
            });

            $('#cb3').click(function () {
                if ($(this).is(":checked")) {
                    $('#quan3').show();
                } else {
                    $('#quan3').hide();
                }
            });

            $('#cb4').click(function () {
                if ($(this).is(":checked")) {
                    $('#quan4').show();
                } else {
                    $('#quan4').hide();
                }
            });

            $(function(){
                $('[type="date"].min-today').prop('min', function(){
                    return new Date().toJSON().split('T')[0];
                });
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
        <div id="logo" class="pull-left">
            <a href="index.html" id="logoa"><img src="img/logo4.png" alt="logo" width="120%"></a>

        </div>

        <nav id="nav-menu-container" class="navbar-expand-lg" >
            <ul class="nav-menu res" >
                <li><a href="index.html">Home</a></li>

                <li class="menu-has-children"><a href="#rest">Menu</a>
                    <ul>
                        <li><a href="#">Burgers</a></li>
                        <li class="menu-has-children"><a href="#">Family Meals</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Deserts</a></li>
                        <li><a href="#">Drop Down 5</a></li>

                    </ul>
                </li>



                <li class="menu-active"><a href="php/checkbook.php">Book A Table</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="php/check.php"><img src="img/myacc2.png"> </a></li>
                <li><a href="#hero"><img src="img/cart3.png"> </a></li>

            </ul>


        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="book">
        <div class="container banner">
            <div class="row">
                <h1>RESERVATION FORM</h1>
                <p class="sub">BOOK YOUR TABLE ONLINE!</p>
            </div>
        </div>
</section>

<!-- End OF Hero -->

<!--==========================
  Intro Section
============================-->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="topic">Tables Available</h1>

        </div>
    </div>
    <div class="row" style="margin-bottom: 30px">
        <form method="post" action="tablebook.php">
        <div class="col-lg-6">
            <h3>Pick a Date</h3>
            <input type="date" class="min-today" id="min" data-date-split-input="true" name="date">
        </div>

        <div class="col-lg-5">
            <h3>Pick a Time</h3>
            <select name="time">
                <option value="8am">8.00 A.M.</option>
                <option value="9am">9.00 A.M.</option>
                <option value="10am">10.00 A.M.</option>
                <option value="11am">11.00 A.M.</option>
                <option value="12pm">12.00 P.M.</option>
                <option value="1pm">1.00 P.M.</option>
                <option value="2pm">2.00 P.M.</option>
                <option value="3pm">3.00 P.M.</option>
                <option value="4pm">4.00 P.M.</option>
                <option value="5pm">5.00 P.M.</option>
                <option value="6pm">6.00 P.M.</option>
                <option value="7pm">7.00 P.M.</option>
                <option value="8pm">8.00 P.M.</option>
                <option value="9pm">9.00 P.M.</option>

            </select>
        </div>

        <div class="col-lg-1">
            <input type="submit" value="Check Availability" class="btn-get-started-av">

        </div>
        </form>

        <?php
            include('php/dbcon.php');

            $date="";
            $time="";
            //$two=2;
            //$four=15;
            //$eight=10;
            //$twelve=5;
            if(isset($_POST['date'])){
                $date=$_POST["date"];
            }
        if(isset($_POST['time'])){
            $time=$_POST["time"];
        }

       // echo $date.$time;
        $sql = "SELECT * FROM tables WHERE Date='$date' AND Time='$time';";
        
        $result = $conn->query($sql);
       
        if(!($row=$result->fetch_assoc())) {
            $two = 15;
            $four = 15;
            $eight = 10;
            $twelve = 5;
            //$conn->close();
        }
        else {
            if ($result->num_rows > 0) {
               
                while ($row = $result->fetch_assoc()) {
                    $two = $row["Two"];
                    $four = $row["Four"];
                    $eight = $row["Eight"];
                    $twelve = $row["Twelve"];
                   // echo $two.$four.$eight.$twelve;
                }

                


            }
        }
        $getvars = "php/confirmbook.php?two=$two&four=$four&eight=$eight&twelve=$twelve&date=$date&time=$time";

        ?>

    </div>
</div>


<div class="container" id="details" >
    <form id="bookingsec" action="<?php echo $getvars;?>" method="post">
    <div class="row">
        <div class="col-lg-6 colback">

            <center>
                <input type="checkbox" id="cb1" name="cb1" value="2person"><br>
                <input type="number" min="1" max="15" placeholder="Quantity" id="quan1" name="qutwo">
            </center>
            <p class="quan"><?php echo $two;?></p>
            <p class="subtit">2 Person Tables</p>

        </div>

        <div class="col-lg-6 colback">

            <center>
                <input type="checkbox" id="cb2" name="cb2" value="4person"><br>
                <input type="number" min="1" max="15" placeholder="Quantity" id="quan2" name="qufour">
            </center>
            <p class="quan"><?php echo $four;?></p>
            <p class="subtit">4 Person Tables</p>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 colback">

             <center>
                <input type="checkbox" id="cb3" name="cb3" value="8person"><br>
                <input type="number" min="1" max="10" placeholder="Quantity" id="quan3" name="quei">
            </center>
            <p class="quan"><?php echo $eight;?></p>
            <p class="subtit">8 Person Tables</p>

        </div>

        <div class="col-lg-6 colback">

            <center>
                <input type="checkbox" id="cb4" value="12person" name="cb4"><br>
                <input type="number" min="1" max="5" placeholder="Quantity" id="quan4" name="qutwe">
            </center>
            <p class="quan"><?php echo $twelve;?></p>
            <p class="subtit">12 Person Tables</p>

        </div>

    </div>

    <div class="row" STYLE="text-align: center">
        <input type="submit" value="RESERVE A TABLE" class="btn-get-started">

    </div>
</div>
    </form>











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



































</body>
</html>
