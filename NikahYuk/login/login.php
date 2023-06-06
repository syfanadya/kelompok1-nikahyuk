<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <title>Login & Sign-Up</title>
</head>

<body>

    <div class="container">
        <form action="proseslogin.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" value="Login">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Sign-Up</a></p>
        </form>
    </div>
</body>

</html>