<?php
require_once "koneksi.php";

if (!isset ($_POST['judul'])) {
    echo "<p> Judul tidak boleh kosong.</p";
    exit();
}
if (!isset ($_POST['isian'])) {
    echo "<p> Isian tidak boleh kosong.</p";
    exit();
}
$sql = "INSERT INTO diary1 (judul,isian,tanggal) VALUES ('$_POST[judul]', '$_POST[isian]', NOW())";
if (mysqli_query($conn,$sql)) {
    header( "refresh:5;url=index.php" );
    echo "<p> Data berhasil disimpan.</p>";
}
else {
    echo "<p> Ups, data gagal disimpan :</p>";
}
?>