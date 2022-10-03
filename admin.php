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
 
    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
    <h3>Data segel</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Kota</th>
            <th>Kondisi</th>
            <th>Nama Penera</th>
            <th>ID Penera</th>
            <th>Opsi</th>       
        </tr>
        <?php 
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($connect,"select * from lokasi");
        while($a=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a['nama_lokasi']; ?></td>
            <td><?php echo $a['kondisi']; ?></td>
            <td><?php echo $a['nama_penera']; ?></td>
            <td><?php echo $a['id_penera']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $a['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $a['id']; ?>">Hapus</a>                  
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
