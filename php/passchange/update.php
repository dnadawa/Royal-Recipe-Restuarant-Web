<?php
include ('../dbcon.php');
?>

<?php
$pass="";

if(isset($_POST['pass'])){
    $pass=$_POST["pass"];
}

session_start();
$mail = $_SESSION['email'];

$sql = "UPDATE users SET Password='$pass' WHERE Email='$mail'";
if ($conn->query($sql) === TRUE) {
    ?><script>
    alert("Password Updated!");
    window.location.href="../../login.html";

</script><?php
} else {
    ?><script>
        alert("Error Updating Data ".$conn->error);
        window.location.href="../../login.html";
    </script>
<?php
}



?>
