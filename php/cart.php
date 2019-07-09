<?php
session_start();

$email=$_SESSION['email'];


?>
<head>
    <meta charset="UTF-8">
    <title>Cart - Royal Recipe Restaurant</title>


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
    <link href="../css/myreserve.css" rel="stylesheet">

</head>
<body>
<div class="container panel">
    <div class="row" id="mn">

        <div class="form-group">

            <div class="state"><br><!--i class="fa fa-unlock-alt"></i--><img src="../img/cart3.png"> <br><h1>Cart</h1></div>

            <div class="row mid">


                <div class="table-container">
                    <table class="table-rwd table-responsive">
                        <tr>

                            <th>Food Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                            
                        </tr>

                        <?php
                        include ('dbcon.php');
                        $code=rand(10000,99999);
                        $sel="SELECT * FROM foodorders WHERE Email='$email'";

                        $result = $conn->query($sel);
                        $fname="";
                        $pri="";
                        $quan="";
                        $subtot=0;
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $foodname = $row['FoodName'];
                            
                             $price = $row['Price'];
                                $q=$row['Quantity'];
                                $ref = "removeitem.php?foodname=$foodname&price=$price&email=$email";
                                $plus = "cartplus.php?foodname=$foodname&price=$price&email=$email";
                                $minus = "cartminus.php?foodname=$foodname&price=$price&email=$email";



                                $up = "UPDATE foodorders SET OrderID='$code' WHERE FoodName='$foodname' AND Email='$email'";
                                $conn->query($up);







                                ?>
                                <tr>

                                    <form action="checkout.php" method="POST" id="f1">
                                    <td><?php echo $foodname; ?></td>
                                    <input type="hidden" value="<?php echo $foodname; ?>" name="foodname" id="foodname">
                                    <td><?php echo $price; ?></td>
                                    <input type="hidden" value="<?php echo $price; ?>" name="price" id="price">
                                    <td>
                                    <a href="<?php echo $minus; ?>" class="btn btn-warning">-</a>
                                    <a href="<?php echo $plus; ?>" class="btn btn-success">+</a>
                                    
                                    <label><?php echo $q;?></label>
                                    </td>
                                    
                                    <td><a href="<?php echo $ref; ?>" class='btn btn-danger'>Remove</a></td>
                                    
                                    <?php

                                    $totpri=$q*$price;
                                    $subtot=$subtot+$totpri;

                                    $fname=$fname.$foodname."<br>";
                                    $pri=$pri.$totpri."<br>";
                                    $quan=$quan.$q."<br>";
                                   
                                    ?>

                                   

                                </tr>
                                

                                <?php
                                    

                               



                            }}
                        $conn->close();
                        ?>





                    </table>
                    <div class="row">
                    <center>    <?php










                                  // echo $quan;
                                    //session_start();    
                                   $_SESSION['fname']=$fname;
                                   $_SESSION['quan']=$quan;
                                   $_SESSION['subtot']=$subtot;
                                   $_SESSION['code']=$code;
                                   //echo $_SESSION['fname'];
                                  
                                   $_SESSION['pri']=$pri;
                                  
                                   ?>

                                   
                        
                        <input type="submit" class="login" name="check" style="margin-bottom:20px margin-top:30px" value="Checkout">
                        <!--button class="login" name="check" style="margin-bottom:20px margin-top:30px" onclick="parsedata();">Checkout</button--> 
                        <div class="col-lg-12">
                        <h5><a href="../index.html">Homepage</a> </h5>
                    </div>
                        </center>
                    
                    </div>
                </div>
            </div>

</form>
                                    







        </div>
    </div>

</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>








</div>






</div>




</body>