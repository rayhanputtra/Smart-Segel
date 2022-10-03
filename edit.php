<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <div class="judul">     
        <h1>Data Smart Segel</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>SMART SEGEL</h3>
    </div>
    
    <br/>
    
    <a href="admin.php">Lihat Semua Data</a>
 
    <br/>
    <h3>Edit data</h3>
 
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $no = 1;
    $data = mysqli_query($connect,"select * from lokasi where id='$id'");
    while($a=mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post">        
        <table>
            <tr>
                <td>Kota</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
                    <input type="text" name="nama_lokasi" value="<?php echo $a['nama_lokasi'] ?>">
                </td>                   
            </tr>   
            <tr>
                <td>Kondisi</td>
                <td><input type="text" name="kondisi" value="<?php echo $a['kondisi'] ?>"></td>                 
            </tr>   
            <tr>
                <td>Nama Penera</td>
                <td><input type="text" name="nama_penera" value="<?php echo $a['nama_penera'] ?>"></td>                 
            </tr>   
            <tr>
                <td>ID Penera</td>
                <td><input type="text" name="id_penera" value="<?php echo $a['id_penera'] ?>"></td>                 
            </tr>   
                <td></td>
                <td><input type="submit" value="Simpan"></td>                   
            </tr>               
        </table>
    </form>
    <?php } ?>
</body>
</html>
