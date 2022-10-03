<?php 
 
require 'koneksi.php';
$id = $_POST['id'];
 
$query = "UPDATE lokasi SET kondisi =('ditera') WHERE id='$id'";
mysqli_query($connect, $query);
header("location:penera.php?pesan=update");
 
?>
