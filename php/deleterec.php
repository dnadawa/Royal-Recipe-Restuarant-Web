<?php
include ('dbcon.php');
$orderid=$_GET['orderid'];
$date=$_GET['date'];
$time=$_GET['time'];
$two=$_GET['two'];
$four=$_GET['four'];
$eight=$_GET['eight'];
$twelve=$_GET['twelve'];

?>
<script>
    if(confirm("Are you sure you want to cancel your order?")){
        <?php

        $dele = "DELETE FROM orders WHERE Order_ID='$orderid'";
        $sel="SELECT * FROM tables WHERE Date='$date' AND Time='$time'  ORDER BY ID DESC LIMIT 1";
        $conn->query($dele);

        $result = $conn->query($sel);



        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $mtwo=$row["Two"];
                $mfour=$row["Four"];
                $meight=$row["Eight"];
                $mtwelve=$row["Twelve"];


                $rtwo=$mtwo+$two;
                $rfour=$mfour+$four;
                $reight=$meight+$eight;
                $rtwelve=$mtwelve+$twelve;

                echo $rtwo.$rfour.$reight.$rtwelve;


                $ins = "INSERT INTO tables (Date, Time, Two, Four, Eight, Twelve)
                VALUES ('$date', '$time', '$rtwo', '$rfour', '$reight','$rtwelve')";

                $conn->query($ins);


            }


        }

    ?>


    alert("Successfully cancelled your Order!");
        window.location.href="myreserve.php";
    }
else{
    window.location.href="myreserve.php";
    }




</script>















