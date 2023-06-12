<?php
session_start();

if(!isset($_SESSION['iduser'])){
    header("refresh:3;url=login.php");
    echo "<p>Anda belum login.</p>";
    die();
}
elseif(!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header("refresh:3;url=index.php");
    echo "<p>Anda tidak memiliki akses sebagai admin.</p>";
    die();
}
?>