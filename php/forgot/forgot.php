<?php

session_start();
$verify=$_SESSION['forgot'];
$email=$_SESSION['mail'];
echo $verify;
$getvar ="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Your Email</title>


    <link href="../../img/ver.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#vc").keyup(function(){


                var mailcode = <?php echo $verify; ?>;
                var typedcode = $("#vc").val();

                if((mailcode!=typedcode)){
                    $("#errmsg").css("display","block");
                    $("#btn").attr('disabled', 'disabled');
                }
                else{
                    $("#errmsg").css("display","none");
                    $("#btn").removeAttr('disabled');
                }

            });


            $("#vc").focus(function(){


                var mailcode = <?php echo $verify; ?>;
                var typedcode = $("#vc").val();

                if((mailcode!=typedcode)){
                    $("#errmsg").css("display","block");
                    $("#btn").attr('disabled', 'disabled');
                }
                else{
                    $("#errmsg").css("display","none");
                    $("#btn").removeAttr('disabled');
                }

            });
        });



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
    <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../css/register.css" rel="stylesheet">

    <style>
        .lblerror2{
            color: #ff2132;
            display: none;
            padding-left:350px;
        }

        h4{
            color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding-top: 10px;
            padding-right: 60px;

        }
    </style>


</head>
<body>
<div class="container panel">
    <div class="row" id="mn">
        <div class="form-group">

            <div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Verify</h1></div>
            <form method="post" action="newpassword.php" role="form">
                <div class="row mid">
                    <div class="col-lg-12">
                        <label class="lbl">Enter Verification Code</label><br>
                        <input type="text" placeholder="Verification Code" name="vc" required id="vc">
                        <label class="lblerror2" id="errmsg">Verification code doesn't Match! Try Again!</label>
                    </div>

                    <div class="col-lg-12">
                        <input type="submit" class="login" value="Verify" id="btn" name="submit" disabled required>
                    </div>
                    <div class="col-lg-12">
                        <h4>Verification Code is sent to <?php echo $email; ?>. If there is no email received please check your spam folder!</h4>
                    </div>

                </div>

            </form>

        </div>
    </div>

</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>
</html>



