<?php
include('dbcon.php');
$name="";
$email="";
$add1="";
$add2="";
$mob="";




if(isset($_POST['name'])){
    $name=$_POST["name"];
}

if(isset($_POST['email'])){
    $email=$_POST["email"];
}

if(isset($_POST['address1'])){
    $add1=$_POST["address1"];
}

if(isset($_POST['address2'])){
    $add2=$_POST["address2"];
}

if(isset($_POST['tel'])){
    $mob=$_POST["tel"];
}



$selq = "SELECT * FROM billinginfo WHERE Email='$email' LIMIT 1";
$result = $conn->query($selq);


    if($row = $result->fetch_assoc()) {
        
        $up = "UPDATE billinginfo SET Uname='$name',Add1='$add1',Add2='$add2',Tele='$mob' WHERE Email='$email";

if ($conn->query($up) === TRUE) {
    echo "Record updated successfully";
} else {
    header("Location: somethingwentwrong.php");
}




} 
 else {
    
$sql = "INSERT INTO billinginfo VALUES ('$name', '$email', '$add1','$add2','$mob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    header("Location: somethingwentwrong.php");
}
 }
session_start();
$code=$_SESSION['code'];
$tot=0;

 $select = "SELECT * FROM foodorders WHERE OrderID='$code' AND Email='$email'";
$result = $conn->query($select);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $fname=$row["FoodName"];
        $cat=$row["Category"];
        $quan=$row["Quantity"];
        $price=$row["Price"];

        $tot=$quan*$price;

        $topo = "INSERT INTO placedorders VALUES ('$code', '$email', '$fname','$quan','$tot','No')";

        if ($conn->query($topo) === TRUE) {
            echo "New record created successfully";
            $del = "DELETE FROM foodorders WHERE OrderID='$code'";
            $conn->query($del);
            header("Location: placedsuccess.php");

        } else {
            header("Location: somethingwentwrong.php");
        }
    }
} else {
    header("Location: somethingwentwrong.php");
    }
    ?>