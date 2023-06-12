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

$sql = "SELECT id, username, admin FROM users WHERE email = '$email' AND password = MD5('$password')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    $_SESSION['iduser'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    if ($user['admin'] == 1) {
        // User is an admin
        $_SESSION['admin'] = true;
        header("refresh:0;url=adminindex.php");
    } else {
        // User is a regular user
        $_SESSION['admin'] = false;
        header("refresh:0;url=dashboard.php");
    }
} else {
    header("refresh:0;url=logingagal.php");
}
?>
