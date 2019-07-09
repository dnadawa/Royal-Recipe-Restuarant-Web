<?php
include('dbcon.php');

session_start();
if($_SESSION['active']=="yes"){
    $email=$_SESSION['email'];

}
else{
    header("Location: ../login.html");
}

$foodname="";
$cata="";
$price="";

if(isset($_POST['foodname'])){
    $foodname=$_POST["foodname"];
}

if(isset($_POST['cata'])){
    $cata=$_POST["cata"];
}

if(isset($_POST['price'])){
    $price=$_POST["price"];
}
//echo $foodname.$cata.$price;
$selq = "SELECT * FROM foodorders WHERE FoodName='$foodname' LIMIT 1";
$result = $conn->query($selq);


    if($row = $result->fetch_assoc()) {
        ?>
    <script>
        alert ("Item already Exists!");
        window.location.href = "../store.php";
    </script><?php
    }
 else {
    

$sql = "INSERT INTO foodorders (FoodName,Category,Price,Quantity,Email) VALUES ('$foodname', '$cata', '$price','1', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../store.php");
} else {
   echo "Error!";
}

$conn->close();

 }












?>