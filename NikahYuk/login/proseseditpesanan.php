<?php 
require_once "config.php";
$sql = "UPDATE pesanan
        SET status_pesanan='$_POST[status_pesanan]'
        WHERE id_pesanan=$_GET[id]";

if (mysqli_query($conn,$sql)) {
    header( "refresh:5;url=adminindex.php" );
    echo "<p> Data berhasil di edit.</p>";
}
else {
    echo "<p> Ups, data gagal di edit :</p>";
}       

?>