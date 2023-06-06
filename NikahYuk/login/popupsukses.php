<?php 
include "ceklogin.php";
?>
<html>

<head>
    <link href="assetspesanan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    body {
        background: #ddd;
        font-family: 'Roboto', sans-serif;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .popup {
        width: 350px;
        height: 280px;
        padding: 30px 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-sizing: border-box;
        z-index: 2;
        text-align: center;
    }

    .popup .icon {
        margin: 5px 0;
        width: 50px;
        height: 50px;
        border: 2px solid #FF849C;
        text-align: center;
        display: inline-block;
        border-radius: 50%;
    }

    .popup .icon i.bi {
        padding-top: 10px;
        font-size: 50px;
        color: #FF849C;
    }

    .popup .title {
        margin: 5px 0;
        font-weight: 600;
        font-size: 40px;
    }

    .popup .description {
        color: #222;
        padding: 5px;
        font-size: 16px;
    }

    .popup .oke-btn {
        margin-top: 15px;
    }

    .popup .oke-btn button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #FF849C;
        font-weight: 600;
        border: 2px solid #f5f5f5;
        border-radius: 10px;
        color: #f5f5f5;
        transition: all 300ms ease-in-out;
    }

    .popup .oke-btn button:hover {
        color: #FF849C;
        background-color: #f5f5f5;
        border: 2px solid #FF849C;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: #FF849C;
    }
    </style>
</head>

<body>
    <div class="popup center">
        <div class="icon">
            <i class="bi bi-check"></i>
        </div>
        <div class="title">
            Sukses!!
        </div>
        <div class="description">
            Selamat Pesanan Anda Telah Berhasil
        </div>
        <div class="oke-btn">
            <button id="oke-popup-btn">
                <a href="inforekening.php">Oke</a>
            </button>
        </div>
    </div>
    <div>

    </div>
</body>

</html>