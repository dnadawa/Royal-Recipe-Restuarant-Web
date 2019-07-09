<?php
include ('dbcon.php');
?>

<?php
$username=$_GET['username'];
$email=$_GET['email'];
$password=$_GET['password'];
$add1=$_GET['add1'];
$add2=$_GET['add2'];
$mobno=$_GET['mobno'];
echo $username."<br>".$email."<br>".$password."<br>".$add1."<br>".$add2."<br>".$mobno;

$sql = "INSERT INTO users (Username, Email, Password,Address_l1,Address_l2,Tel)
VALUES ('$username','$email','$password','$add1','$add2','$mobno')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
session_destroy();
$conn->close();
?>
<script>
    alert("Register Successful!");
    window.location.href = "../register.html";
</script>

