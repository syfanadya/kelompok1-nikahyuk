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
    header("refresh:3;url=statuspembayaran.php");
} else {
    echo "<p> Ups, upload gagal :(</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .loader {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
</body>

</html>