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
}
else {
    header("refresh:3;url=login.php");
    echo "<p> Login Gagal</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kotak Memperbesar</title>
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
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
</body>

</html>