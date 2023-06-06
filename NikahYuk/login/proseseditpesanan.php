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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
</head>

<body>

</body>

</html>