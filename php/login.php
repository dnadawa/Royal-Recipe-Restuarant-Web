<?php
include ('dbcon.php');
?>

<?php

$email="";
$password="";

if(isset($_POST['email'])){
    $email=$_POST["email"];
}

if(isset($_POST['pass'])){
    $password=$_POST["pass"];
}

$sql = "SELECT * FROM users WHERE Email='$email'";
$result = $conn->query($sql);

if(!($row=$result->fetch_assoc())){
    ?>
    <script>
        alert ("Account Doesn't Exists!");
        window.location.href = "../login.html";
    </script><?php

}

else{
   $dbemail= $row["Email"];
    $dbpass= $row["Password"];
    if($password!=$dbpass){
        ?>
        <script>
            alert ("Your Password is Wrong!Try Again!");
            window.location.href = "../login.html";
        </script>

<?php
        session_start();
        $_SESSION['active']="no";
    }
    else{
        session_start();
        $_SESSION['uname']=$row["Username"];
        $_SESSION['email']=$dbemail;
        $_SESSION['add1']=$row["Address_l1"];
        $_SESSION['add2']=$row["Address_l2"];
        $_SESSION['mobile']=$row["Tel"];
        $_SESSION['active']="yes";
        header("Location: profile.php");
        //echo  $_SESSION['uname'].'<br>'. $_SESSION['email'].'<br>'.$_SESSION['add1'].'<br>'.$_SESSION['add2'].'<br>'.$_SESSION['mobile'].'<br>'.$_SESSION['active'];
    }
}





?>