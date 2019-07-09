<?php
include ('dbcon.php');
?>


<?php
$username="";
$email="";
$password="";
$add1="";
$add2="";
$mobno="";

if(isset($_POST['name'])){
    $username=$_POST["name"];
}

if(isset($_POST['email'])){
    $email=$_POST["email"];
}

if(isset($_POST['pass'])){
    $password=$_POST["pass"];
}

if(isset($_POST['add1'])){
    $add1=$_POST["add1"];
}

if(isset($_POST['add2'])){
    $add2=$_POST["add2"];
}

if(isset($_POST['mobno'])){
    $mobno=$_POST["mobno"];
}

echo $username."<br>".$email."<br>".$password."<br>".$add1."<br>".$add2."<br>".$mobno;

$sql = "SELECT Email FROM users WHERE Email='$email' LIMIT 1";
$result = $conn->query($sql);

if($row=$result->fetch_assoc()){
    ?>
    <script>
        alert ("Email already Exists!");
        window.location.href = "../register.html";
    </script><?php

}
else {


    session_start();
    $verify = rand(324327, 999995);
    echo $verify;
    $_SESSION['verify'] = $verify;


    $to = $email;
    $subject = "Verify Your Account";

    $message = "
<!DOCTYPE html>
<head>

    <title>Verify</title>
</head>
<body>
<center><img src=\"../img/logo3.png\" alt=\"Royal Recipe Restaurant\">
<h1 style=\"color: #f03c44\">Please Verify Your Email!</h1>
    <p style=\"font-size: 40px;background-color: #feffb4;color: #001cff\">$verify</p>
    <p style=\"font-size: 17px;text-align: left\">If you are not requested this please ignore this message. If you requested please enter above code
    in the web page</p>
    <u><p style=\"text-align: center;color: #4e100d\">Royal Recipe Restaurant Pvt. Ltd.</p></u>


</center>
</body>
</html>
";


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <royalreciperestaurant@gmail.com>' . "\r\n";


    mail($to, $subject, $message, $headers);

    $getvar = "?username=$username&email=$email&password=$password&add1=$add1&add2=$add2&mobno=$mobno";


    header("Location: verify.php" . $getvar);
    $conn->close();
}
?>

