<html>

<head>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <style>

    </style>
</head>

<body>
    <h1>Edit Status Pembayaran</h1>

    <?php 
            require_once "config.php";
            $sql ="SELECT id_pembayaran, status_pembayaran FROM pembayaran WHERE id_pembayaran=" . $_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($result);
        ?>

    <form action="proseseditpembayaran.php?id=<?php echo $_GET['id']?>" method="POST">
        <label for="status_pembayaran">Status Pemesanan :</label>
        <select name="status_pembayaran" id="status_pembayaran">
            <option value="Belum Terverifikasi">Belum Terverifikasi</option>
            <option value="Lunas">Lunas</option>
        </select>
        <br />
        <br />
        <br />
        <br />

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>

</html>