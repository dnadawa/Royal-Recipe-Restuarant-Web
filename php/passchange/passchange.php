<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Password</title>


    <link href="../../img/logfav.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#repass").keyup(function(){


                var pass = $("#pass").val();
                var repass = $("#repass").val()

                if((pass!=repass)||(pass=="")||(repass="")){
                    $("#errmsg").css("display","block");
                    $("#btn").attr('disabled', 'disabled');
                }
                else{
                    $("#errmsg").css("display","none");
                    $("#btn").removeAttr('disabled');
                }

            });


            $("#repass").focus(function(){


                var pass = $("#pass").val();
                var repass = $("#repass").val()

                if((pass!=repass)||(pass=="")||(repass="")){
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

</head>
<body>
<div class="container panel">
    <div class="row" id="mn">
        <div class="form-group">

            <div class="state"><br><i class="fa fa-unlock-alt"></i> <br><h1>Update Password</h1></div>
            <form method="post" action="update.php" role="form">
                <div class="row mid">

                    <div class="col-lg-12">
                        <label class="lbl">New Password</label><br>
                        <input type="password" placeholder="New Password" name="pass" id="pass" required maxlength="20">
                    </div>

                    <div class="col-lg-12">
                        <label class="lbl">Retype Password</label><br>
                        <input type="password" placeholder="Retype Password" name="repass" id="repass" required>
                        <label class="lblerror" id="errmsg">Password doesn't Match</label>
                    </div>


                    <div class="col-lg-12">
                        <input type="submit" class="login" value="Update Password" id="btn" name="submit" disabled required>
                    </div>


                </div>
            </form>

        </div>
    </div>

</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>
</html>
