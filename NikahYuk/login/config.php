<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "nikah_yuk";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("Gagal tersambung dengan database: " . mysqli_connect_error());
    exit();
}
 
?>