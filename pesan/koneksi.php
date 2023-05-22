<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nikah_yuk";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die ("Database error");
}
?>