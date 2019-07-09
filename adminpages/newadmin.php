<?php
include('../php/dbcon.php');

$uname="";
$email="";
$pass="";

if(isset($_POST['uname'])){
    $uname=$_POST["uname"];
}

if(isset($_POST['email'])){
    $email=$_POST["email"];
}

if(isset($_POST['pass'])){
    $pass=$_POST["pass"];
}


//echo $uname.$email.$pass;
$selq="SELECT Email FROM admins WHERE Email='$email'";
$result = $conn->query($selq);
if($row=$result->fetch_assoc()){
    ?>
    <script>
        alert ("Email already Exists!");
        window.location.href = "addadmin.php";
    </script><?php

}else{



$sql = "INSERT INTO admins VALUES ('$uname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {?>
    <script>
        alert ("Admin Added");
        window.location.href = "addadmin.php";
    </script><?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}







?>