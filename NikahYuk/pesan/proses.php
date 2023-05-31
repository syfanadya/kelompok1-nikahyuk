<?php
require_once "koneksi.php";

// Check 
if (!isset($_POST['nama_pengantin_pria'])) {
    echo "<p> Nama pengantin pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nama_pengantin_wanita'])) {
    echo "<p> Nama pengantin wanita tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nomor_hp'])) {
    echo "<p> Nomor hp tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['lokasi_acara'])) {
    echo "<p> Lokasi acara tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['waktu_acara'])) {
    echo "<p> Waktu acara tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['tanggal_acara'])) {
    echo "<p> Tanggal acara tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nama_ayah_pengantin_pria'])) {
    echo "<p> Nama ayah pengantin pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nama_ibu_pengantin_pria'])) {
    echo "<p> Nama ibu pengantin pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nama_ayah_pengantin_wanita'])) {
    echo "<p> Nama ayah pengantin wanita tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['nama_ibu_pengantin_wanita'])) {
    echo "<p> Nama ibu pengantin wanita tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['ayat_kitab_suci'])) {
    echo "<p> Ayat Kitab Suci tidak boleh kosong.</p>";
    exit();
}
// if (!isset($_POST['foto_pengantin_pria'])) {
//     echo "<p> Foto pengantin pria tidak boleh kosong.</p>";
//     exit();
// }
if ($_FILES['foto_pengantin_pria']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_pengantin_pria']['tmp_name'];
    $file_name = $_FILES['foto_pengantin_pria']['name'];
    $destination = 'file_user/fotopengantinpria/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // file berhasil diupload dan disimpan di direktori yang ditentukan
    } else {
        // file gagal diupload
    }
}
// if (!isset($_POST['foto_pengantin_wanita'])) {
//     echo "<p> Foto pengantin wanita tidak boleh kosong.</p>";
//     exit();
// }
if ($_FILES['foto_pengantin_wanita']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_pengantin_wanita']['tmp_name'];
    $file_name = $_FILES['foto_pengantin_wanita']['name'];
    $destination = 'file_user/fotopengantinwanita/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // file berhasil diupload dan disimpan di direktori yang ditentukan
    } else {
        // file gagal diupload
    }
}
// if (!isset($_POST['foto_prewedd'])) {
//     echo "<p> Foto prewedd tidak boleh kosong.</p>";
//     exit();
// }
if ($_FILES['foto_prewedd']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_prewedd']['tmp_name'];
    $file_name = $_FILES['foto_prewedd']['name'];
    $destination = 'file_user/fotoprewedd/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // file berhasil diupload dan disimpan di direktori yang ditentukan
    } else {
        // file gagal diupload
    }
}
// if (!isset($_POST['foto_galeri'])) {
//     echo "<p> Foto galeri tidak boleh kosong.</p>";
//     exit();
// }
if ($_FILES['foto_galeri']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['foto_galeri']['tmp_name'];
    $file_name = $_FILES['foto_galeri']['name'];
    $destination = 'file_user/fotogaleri/' . $file_name;
    if (move_uploaded_file($tmp_name, $destination)) {
        // file berhasil diupload dan disimpan di direktori yang ditentukan
    } else {
        // file gagal diupload
    }
}
if (!isset($_POST['norek_pengantin_pria'])) {
    echo "<p> Nomor rekening pengantin pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['norek_pengantin_wanita'])) {
    echo "<p> Nomor rekening wanita pria tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['lagu'])) {
    echo "<p> Lagu tidak boleh kosong.</p>";
    exit();
}


$sql =  "INSERT INTO pesanan (
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
            foto_prewedd,
            foto_galeri,
            norek_pengantin_pria,
            norek_pengantin_wanita,
            lagu,
            tanggal_pemesanan)
        VALUES (
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
            '$_POST[foto_pengantin_pria]',
            '$_POST[foto_pengantin_wanita]',
            '$_POST[foto_prewedd]',
            '$_POST[foto_galeri]',
            '$_POST[norek_pengantin_pria]',
            '$_POST[norek_pengantin_wanita]',
            '$_POST[lagu]',
            NOW())";
if (mysqli_query($conn,$sql)) {
    header( "refresh:2;url=../popup/sukses.html" );
    echo "<p> Data berhasil disimpan.</p>";
}
else {
    echo "<p> Ups, data gagal disimpan :</p>";
}


?>