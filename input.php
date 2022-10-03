<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">     
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.malasngoding.com</h3>
    </div>
    
    <br/>
 
    <a href="admin.php">Lihat Semua Data</a>
 
    <br/>
    <h3>Input data baru</h3>
    <form action="input-aksi.php" method="post">        
        <table>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="nama_lokasi"></td>                 
            </tr>   
            <tr>
                <td>Kondisit</td>
                <td><input type="text" name="kondisi"></td>                 
            </tr>   
            <tr>
                <td>Nama Penera</td>
                <td><input type="text" name="nama_penera"></td>                 
            </tr>   
            <tr>
                <td>ID Penera</td>
                <td><input type="text" name="id_penera"></td>                   
            </tr>   
                <td></td>
                <td><input type="submit" value="Simpan"></td>                   
            </tr>               
        </table>
    </form>
</body>
</html>
