<?php
include ('../php/dbcon.php');
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

$sql = "SELECT * FROM admins WHERE Email='$email'";
$result = $conn->query($sql);

if(!($row=$result->fetch_assoc())){
    ?>
    <script>
        alert ("Account Doesn't Exists!");
        window.location.href = "adminlogin.php";
    </script><?php

}

else{
   $dbemail= $row["Email"];
    $dbpass= $row["Password"];
    if($password!=$dbpass){
        ?>
        <script>
            alert ("Your Password is Wrong!Try Again!");
            window.location.href = "adminlogin.php";
        </script>

<?php
        session_start();
        $_SESSION['adminactive']="no";
    }
    else{
        session_start();
        $_SESSION['adminname']=$row["Username"];
        $_SESSION['adminemail']=$dbemail;
       
        $_SESSION['adminactive']="yes";
        header("Location: ../admin.php");
        //echo  $_SESSION['uname'].'<br>'. $_SESSION['email'].'<br>'.$_SESSION['add1'].'<br>'.$_SESSION['add2'].'<br>'.$_SESSION['mobile'].'<br>'.$_SESSION['active'];
    }
}





?>