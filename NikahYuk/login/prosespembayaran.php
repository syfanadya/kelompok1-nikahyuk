<?php 
include "ceklogin.php";
require_once "config.php";

if ($_FILES['bukti_pembayaran']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['bukti_pembayaran']['tmp_name'];
    $file_name = $_FILES['bukti_pembayaran']['name'];
    $destination = 'buktipembayaran/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File successfully uploaded and saved to the specified directory
    } else {
        // Failed to upload the file
    }
}

$sql = "INSERT INTO pembayaran (
            iduser, 
            tanggal, 
            bukti_pembayaran,
            status_pembayaran)
        VALUES (
            '$_SESSION[iduser]',
            NOW(),
            '$file_name', 
            'Belum Terverifikasi')"; 

if (mysqli_query($conn,$sql)) {
    header("refresh:10;url=statuspembayaran.php");
    echo "<p> Upload berhasil disimpan.</p>";
} else {
    echo "<p> Ups, upload gagal :(</p>";
}
?>