<?php
include ('dbcon.php');
$user="";
$add1="";
$add2="";
$mob="";
session_start();
$email=$_SESSION['email'];

if(isset($_POST['name'])){
    $user=$_POST["name"];
}

if(isset($_POST['add1'])){
    $add1=$_POST["add1"];
}
if(isset($_POST['add2'])){
    $add2=$_POST["add2"];
}
if(isset($_POST['mobno'])){
    $mob=$_POST["mobno"];
}

//echo $user.$add1.$add2.$mob.$email;
if (isset($_POST['update'])) {
    $update = "UPDATE users SET Username='$user',Address_l1='$add1',Address_l2='$add2',Tel='$mob' WHERE Email='$email'";


    if ($conn->query($update) === TRUE) {
        ?>
        <script>alert("Account Updated!")</script>
        <?php
        $_SESSION['uname'] = $user;
        $_SESSION['email'] = $email;
        $_SESSION['add1'] = $add1;
        $_SESSION['add2'] = $add2;
        $_SESSION['mobile'] = $mob;
        ?>
            <script>window.location.href="profile.php";</script>
        <?php

    } else {?>
        <script>alert("Unable to Update!");
        window.location.href="profile.php"
        </script>

        <?php
    }

    $conn->close();
}

elseif(isset($_POST['delete'])) {
    ?>
    <script>if(confirm("Are you sure you want to delete your account?")){
            <?php
            $dele = "DELETE FROM users WHERE Email='$email'";

            if ($conn->query($dele) === TRUE) {
            ?>alert("Account Deleted!");
            window.location.href="../login.html";
            <?php

            } else {?>alert("Unable To Delete!");
            window.location.href="profile.php";
            <?php
            $conn->close();
        }
        ?>

        }else{
            window.location.href="profile.php";
        }</script>
   <?php












}

?>