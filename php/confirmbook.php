<?php
include ('dbcon.php');
$qtwo=0;
$qfour=0;
$qeight=0;
$qtw=0;
$date=$_GET['date'];
$time=$_GET['time'];

if(empty($_POST["cb1"]) ) {
    $qtwo=0;
}
else {
    if(isset($_POST['qutwo'])){
        $qtwo=$_POST["qutwo"];
    }
}

if(empty($_POST["cb2"]) ) {
    $qfour=0;
}
else {
    if(isset($_POST['qufour'])){
        $qfour=$_POST["qufour"];
    }
}

if(empty($_POST["cb3"]) ) {
    $qeightei=0;
}
else {
    if(isset($_POST['quei'])){
        $qeight=$_POST["quei"];
    }
}

if(empty($_POST["cb4"]) ) {
    $qtw=0;
}
else {
    if(isset($_POST['qutwe'])){
        $qtw=$_POST["qutwe"];
    }
}

$orderid=rand(111111,999999);
$two=$_GET['two'];
$four=$_GET['four'];
$eight=$_GET['eight'];
$twelve=$_GET['twelve'];
$remtwo=$two-$qtwo;
$remfour=$four-$qfour;
$remeig=$eight-$qeight;
$remtwel=$twelve-$qtw;

?>
<script>
    if(confirm("Confirm Your Reservation for Order No "+<?php echo $orderid; ?>+"\n" +
    "\tTwo Person Tables \t\t:"+<?php echo $qtwo;?>+"\n"+
    "\tFour Person Tables \t\t:"+<?php echo $qfour;?>+"\n"+
    "\tEight Person Tables \t\t:"+<?php echo $qeight;?>+"\n"+
    "\tTwelve Person Tables \t:"+<?php echo $qtw;?>+"\n"+
    "You have additionally charged Rs. 250 for your online order!")){
        <?php
        session_start();
        $ordermail = $_SESSION['email'];
        $ins = "INSERT INTO orders VALUES ('$date', '$time', '$qtwo','$qfour','$qeight','$qtw','$ordermail','$orderid')";
        $instotable = "INSERT INTO tables VALUES ('$orderid','$date', '$time', '$remtwo','$remfour','$remeig','$remtwel')";

        $conn->query($ins);
        $conn->query($instotable);

?>
        alert("Order Placed Successfully");
        window.location.href="../tablebook.php";
    }else{
        alert("Order Canceled!");
        window.location.href="../tablebook.php";
    }


</script>