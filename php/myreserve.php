<?php
session_start();

$email=$_SESSION['email'];


?>
<head>
    <meta charset="UTF-8">
    <title>Reservations - Royal Recipe Restaurant</title>


    <link href="../img/reserve.png" rel="icon">
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

            <div class="state"><br><!--i class="fa fa-unlock-alt"></i--><img src="../img/reserveico.png"> <br><h1>My Reservations</h1></div>

            <div class="row mid">


                <div class="table-container">
                    <table class="table-rwd table-responsive">
                        <tr>

                            <th>Date</th>
                            <th>Time</th>
                            <th>Two Person Tables</th>
                            <th>Four Person Tables</th>
                            <th>Eight Person Tables</th>
                            <th>Twelve Person Tables</th>
                            <th>Order ID</th>
                            <th>Delete</th>
                        </tr>

                        <?php
                        include ('dbcon.php');

                        $sel="SELECT * FROM orders WHERE Email='$email'";

                        $result = $conn->query($sel);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $date = $row['Date'];
                                $time = $row['Time'];
                                $two = $row['Two'];
                                $four = $row['Four'];
                                $eight = $row['Eight'];
                                $twelve = $row['Twelve'];
                                $orderid = $row['Order_ID'];


                                $ref = "deleterec.php?orderid=$orderid&date=$date&time=$time&two=$two&four=$four&eight=$eight&twelve=$twelve";
                                ?>
                                <tr>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo $time; ?></td>
                                    <td><?php echo $two; ?></td>
                                    <td><?php echo $four; ?></td>
                                    <td><?php echo $eight; ?></td>
                                    <td><?php echo $twelve; ?></td>
                                    <td><?php echo $orderid; ?></td>
                                    <td><a href="<?php echo $ref; ?>" class='btn btn-danger'>Delete</a></td>


                                </tr>


                                <?php
                            }}
                        $conn->close();
                        ?>





                    </table>
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