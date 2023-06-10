<?php 
include "ceklogin.php";
require_once "config.php";

if (!isset($_POST['nama'])) {
    echo "<p>Lagu tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['komentar'])) {
    echo "<p>Lagu tidak boleh kosong.</p>";
    exit();
}

$sql = "INSERT INTO komentar (
    iduser,
    nama,
    komentar)
    VALUES (
        '$_SESSION[iduser]',
        '$_POST[nama]',
        '$_POST[komentar]'
    )";
    
if (mysqli_query($conn, $sql)) {
    header("refresh:3;url=semuakomentar.php");
    echo "<p>Data berhasil disimpan.</p>";
} else {
    echo "<p>Ups, data gagal disimpan:</p>";
}

?>