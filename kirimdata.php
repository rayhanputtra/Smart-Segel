<?php 

require 'koneksi.php';

// ini_set('date.timezone', 'Asia/Jakarta');

// $now = new DateTime();

// $datenow = $now->format("Y-m-d H:i:s");

        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $sql = "UPDATE lokasi SET latitude =('$latitude'), longitude = ('$longitude'), kondisi = ('rusak')
        WHERE nama_lokasi='Jakarta'";
        // $sql = "INSERT INTO lokasi VALUES ('$latitude', '$longitude', '$datenow')";

        if ($connect->query($sql) === TRUE) {
            echo json_encode("Ok");
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    

    $connect->close();
 ?>
