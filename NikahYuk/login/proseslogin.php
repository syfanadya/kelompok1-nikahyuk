<?php
session_start();
require_once "config.php";

if (empty($_POST['email']) || empty($_POST['password'])) {
    header("refresh:0;url=logingagal.php");
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
        header("refresh:3;url=adminindex.php");
    } else {
        // User is a regular user
        $_SESSION['admin'] = false;
        header("refresh:0;url=loginsukses.php");
    }
} else {
    header("refresh:0;url=logingagal.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .loader {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
</body>

</html>