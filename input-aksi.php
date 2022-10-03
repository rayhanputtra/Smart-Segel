<?php 
include 'koneksi.php';
$kota = $_POST['nama_lokasi'];
$kondisi = $_POST['kondisi'];
$namapenera = $_POST['nama_penera'];
$idpenera = $_POST['id_penera'];
 
mysql_query("INSERT INTO user VALUES('','$kota','$kondisi','$namapenera', '$idpenera')");
 
header("location:admin.php?pesan=input");
?>
