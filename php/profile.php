<?php
session_start();
$uname=$_SESSION['uname'];
$email=$_SESSION['email'];
$add1=$_SESSION['add1'];
$add2=$_SESSION['add2'];
$mobile=$_SESSION['mobile'];
//echo  $_SESSION['uname'].'<br>'. $_SESSION['email'].'<br>'.$_SESSION['add1'].'<br>'.$_SESSION['add2'].'<br>'.$_SESSION['mobile'].'<br>'.$_SESSION['active'];

?>
<head>
    <meta charset="UTF-8">
    <title>Profile - Royal Recipe Restaurant</title>


    <link href="../img/profile.png" rel="icon">
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
    <link href="../css/profile.css" rel="stylesheet">

</head>
<body>
<div class="container panel">
    <div class="row" id="mn">

        <div class="form-group">

            <div class="state"><br><!--i class="fa fa-unlock-alt"></i--><img src="../img/profileico.png"> <br><h1>My Profile</h1></div>
            <form method="post" action="updatedetails.php" role="form">
                <div class="row mid">
                    <div class="col-lg-12">
                        <label class="lbl">Username</label><br>
                        <input type="text" placeholder="Username" name="name" value="<?php echo $uname; ?>" required>
                    </div>

                    <div class="col-lg-12">
                        <label class="lbl">Email</label><br>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required disabled>
                    </div>

                    <div class="col-lg-12">
                        <label class="lbl">Address</label><br>
                        <input type="text" placeholder="Address Line 1" name="add1" value="<?php echo $add1; ?>" required><br>
                        <input type="text" placeholder="Address Line 2" name="add2" value="<?php echo $add2; ?>">
                    </div>

                    <div class="col-lg-12">
                        <label class="lbl">Mobile Number</label><br>
                        <input type="tel" placeholder="Mobile Number" name="mobno" value="<?php echo $mobile; ?>" required maxlength="10">
                    </div>

                    <div class="col-lg-12">
                        <input type="submit" class="login" value="Update Details" id="btn" name="update" required>
                    </div>

                    <div class="col-lg-12">
                        <input type="submit" class="del" value="Delete Account" id="btn" name="delete" required>
                    </div>




                </div>
            </form>
                <div class="row">
                    <div class="col-lg-4">
                        <button class="reserve" onclick="window.location.href='myreserve.php'">My Reservations</button>

                    </div>

                    <div class="col-lg-4">
                        <button class="cngpass" onclick="window.location.href='passchange/passchange.php'">Change Password</button>

                    </div>

                    <div class="col-lg-4">

                        <button class="logout" onclick="window.location.href='logout.php'">Logout</button>
                    </div>

                    <div class="col-lg-12">
                        <h5><a href="../index.html">Homepage</a> </h5>
                    </div>
                </div>



        </div>
    </div>

</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>








    </div>






</div>




</body>