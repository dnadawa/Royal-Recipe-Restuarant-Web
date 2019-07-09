<?php
$email="";

if(isset($_POST['email'])){
    $email=$_POST["email"];
}


session_start();
$verify = rand(111111, 999995);
echo $verify;
$_SESSION['forgot'] = $verify;
$_SESSION['mail'] = $email;
$to = $email;
$subject = "Reset Password";

$message = "
<!DOCTYPE html>
<head>

    <title>Reset Code</title>
</head>
<body>
<center><img src=\"../img/logo3.png\" alt=\"Royal Recipe Restaurant\">
<h1 style=\"color: #f03c44\">This is the reset code of your Account!</h1>
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



header("Location: forgot.php");

?>