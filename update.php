<?php 
 
require 'koneksi.php';
$id = $_POST['id'];
$kota = $_POST['nama_lokasi'];
$kondisi = $_POST['kondisi'];
$nama = $_POST['nama_penera'];
$idpenera = $_POST['id_penera'];
 
$query = "UPDATE lokasi SET nama_lokasi='$kota', kondisi='$kondisi', nama_penera='$nama', id_penera='$idpenera' WHERE id='$id'";
mysqli_query($connect, $query);
header("location:admin.php?pesan=update");
 
?>
