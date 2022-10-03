<?php
include 'koneksi.php';
$username   = $_POST['username'];
$password   = $_POST['password'];
$cek        = mysqli_query($connect, "select * from login where username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
if ($result>0) {
    $row = mysqli_fetch_assoc($cek);
    $_SESSION["id_user"]=$row["id_user"];
    $_SESSION["username"]=$row["username"];
    $_SESSION["level"]=$row["level"];
    session_start();
    if ($_SESSION["level"]=$row["level"]==1){
        header("Location:welcome.php");
    } else if ($_SESSION["level"]=$row["level"]==2){
        header("Location:admin.php");
    } else if ($_SESSION["level"]=$row["level"]==3)
    header("Location:penera.php");

    }else {
    echo "<div class='alert alert-danger'>
    <strong>Error!</strong> Username dan password salah. 
  </div>";
}
?>

