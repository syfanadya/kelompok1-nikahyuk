<?php 
 
session_start();
require_once "config.php";
 
if (empty($_POST['email']) || empty($_POST['password'])) {
    header("refresh:3;url=login.php");
    echo "<p>Email dan password harus diisi.</p>";
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql =" SELECT id, username FROM users WHERE email='$_POST[email]' AND password=MD5('$_POST[password]')";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $users = mysqli_fetch_array($result);
    $_SESSION['iduser'] = $users[0];
    $_SESSION['username'] = $users[1];

    header("refresh:3;url=dashboard.php");
    echo "<p> Login berhasil</p>";
    
}
else {
    header("refresh:3;url=login.php");
    echo "<p> Login Gagal</p>";
}
?>