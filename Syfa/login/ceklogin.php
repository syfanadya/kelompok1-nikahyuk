<?php
session_start();

if(!isset($_SESSION['iduser'])){
    header("refresh:3;url=login.php");
    echo "<p>Anda belum login.</p>";
    die();
}
?>