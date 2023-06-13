<?php
include "ceklogin.php";
require_once "config.php";

// Periksa keberadaan setiap input yang diperlukan
$requiredFields = [
    'nama_pengantin_pria',
    'nama_pengantin_wanita',
    'nomor_hp',
    'lokasi_acara',
    'waktu_acara',
    'tanggal_acara',
    'nama_ayah_pengantin_pria',
    'nama_ibu_pengantin_pria',
    'nama_ayah_pengantin_wanita',
    'nama_ibu_pengantin_wanita',
    'ayat_kitab_suci',
    'norek_pengantin_pria',
    'norek_pengantin_wanita',
    'lagu'
];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field])) {
        echo "<p>$field tidak boleh kosong.</p>";
        exit();
    }
}

// Unggah foto pengantin pria
if ($_FILES['foto_pengantin_pria']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_pengantin_pria']['tmp_name'];
    $file_name = $_FILES['foto_pengantin_pria']['name'];
    $destination = 'file_pesananuser/fotopengantinpria/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_pengantin_pria_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}

// Unggah foto pengantin wanita
if ($_FILES['foto_pengantin_wanita']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_pengantin_wanita']['tmp_name'];
    $file_name = $_FILES['foto_pengantin_wanita']['name'];
    $destination = 'file_pesananuser/fotopengantinwanita/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_pengantin_wanita_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}

// Unggah foto prewedding 1
if ($_FILES['foto_prewedd_satu']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_prewedd_satu']['tmp_name'];
    $file_name = $_FILES['foto_prewedd_satu']['name'];
    $destination = 'file_pesananuser/fotoprewedd/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_prewedd_satu_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}

// Unggah foto prewedding 2
if ($_FILES['foto_prewedd_dua']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_prewedd_dua']['tmp_name'];
    $file_name = $_FILES['foto_prewedd_dua']['name'];
    $destination = 'file_pesananuser/fotoprewedd/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_prewedd_dua_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}

// Unggah foto galeri 1
if ($_FILES['foto_galeri_satu']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_galeri_satu']['tmp_name'];
    $file_name = $_FILES['foto_galeri_satu']['name'];
    $destination = 'file_pesananuser/fotogaleri/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_galeri_satu_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}
// Unggah foto galeri 2
if ($_FILES['foto_galeri_dua']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_galeri_dua']['tmp_name'];
    $file_name = $_FILES['foto_galeri_dua']['name'];
    $destination = 'file_pesananuser/fotogaleri/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_galeri_dua_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}
// Unggah foto galeri 3
if ($_FILES['foto_galeri_tiga']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_galeri_tiga']['tmp_name'];
    $file_name = $_FILES['foto_galeri_tiga']['name'];
    $destination = 'file_pesananuser/fotogaleri/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_galeri_tiga_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}
// Unggah foto galeri 4
if ($_FILES['foto_galeri_empat']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_galeri_empat']['tmp_name'];
    $file_name = $_FILES['foto_galeri_empat']['name'];
    $destination = 'file_pesananuser/fotogaleri/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // File berhasil diupload dan disimpan di direktori yang ditentukan
        $foto_galeri_empat_name = $file_name; // Simpan nama file dalam variabel yang sesuai
    } else {
        // Gagal mengunggah file
    }
}

// Periksa keberadaan input nomor rekening pengantin pria dan wanita
if (!isset($_POST['norek_pengantin_pria'])) {
    echo "<p>Nomor rekening pengantin pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['norek_pengantin_wanita'])) {
    echo "<p>Nomor rekening pengantin wanita tidak boleh kosong.</p>";
    exit();
}

// Periksa keberadaan input lagu
if (!isset($_POST['lagu'])) {
    echo "<p>Lagu tidak boleh kosong.</p>";
    exit();
}

// Siapkan query SQL untuk menyimpan data pesanan ke database
$sql =  "INSERT INTO pesanan (
    iduser,
    desain,
    nama_pengantin_pria,
    nama_pengantin_wanita,
    nomor_hp,
    lokasi_acara,
    waktu_acara,
    tanggal_acara,
    nama_ayah_pengantin_pria,
    nama_ibu_pengantin_pria,
    nama_ayah_pengantin_wanita,
    nama_ibu_pengantin_wanita,
    ayat_kitab_suci,
    foto_pengantin_pria,
    foto_pengantin_wanita,
    foto_prewedd_satu,
    foto_galeri_satu,
    norek_pengantin_pria,
    norek_pengantin_wanita,
    lagu,
    tanggal_pemesanan,
    foto_prewedd_dua,
    foto_galeri_dua,
    foto_galeri_tiga,
    foto_galeri_empat,
    linkundangan
) VALUES (
    '$_SESSION[iduser]',
    '$_POST[desain]', 
    '$_POST[nama_pengantin_pria]', 
    '$_POST[nama_pengantin_wanita]', 
    '$_POST[nomor_hp]', 
    '$_POST[lokasi_acara]',
    '$_POST[waktu_acara]',
    '$_POST[tanggal_acara]',
    '$_POST[nama_ayah_pengantin_pria]',
    '$_POST[nama_ibu_pengantin_pria]',
    '$_POST[nama_ayah_pengantin_wanita]',
    '$_POST[nama_ibu_pengantin_wanita]',
    '$_POST[ayat_kitab_suci]',
    '$foto_pengantin_pria_name',
    '$foto_pengantin_wanita_name',
    '$foto_prewedd_satu_name',
    '$foto_galeri_satu_name',
    '$_POST[norek_pengantin_pria]',
    '$_POST[norek_pengantin_wanita]',
    '$_POST[lagu]',
    NOW(),
    '$foto_prewedd_dua_name',
    '$foto_galeri_dua_name',
    '$foto_galeri_tiga_name',
    '$foto_galeri_empat_name',
    'default_value'
)";

// Jalankan query SQL dan beri tanggapan sesuai hasilnya
if (mysqli_query($conn, $sql)) {
header("refresh:3;url=popupsukses.php");

} else {
echo "<p>Ups, data gagal disimpan:</p>";
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