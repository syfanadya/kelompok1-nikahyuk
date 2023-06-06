<?php 
require_once "config.php";
$sql = "UPDATE pembayaran
        SET status_pembayaran='$_POST[status_pembayaran]'
        WHERE id_pembayaran=$_GET[id]";

if (mysqli_query($conn,$sql)) {
    header( "refresh:5;url=adminindex.php" );
    echo "<p> Data berhasil di edit.</p>";
}
else {
    echo "<p> Ups, data gagal di edit :</p>";
}       

?>