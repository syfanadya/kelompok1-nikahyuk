<html>

<head>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <style>

    </style>
</head>

<body>
    <h1>Edit Status Pesanan</h1>

    <?php 
            require_once "config.php";
            $sql ="SELECT id_pesanan, status_pesanan FROM pesanan WHERE id_pesanan=" . $_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($result);
        ?>

    <form action="proseseditpesanan.php?id=<?php echo $_GET['id']?>" method="POST">
        <label for="status_pesanan">Status Pemesanan :</label>
        <select name="status_pesanan" id="status_pesanan">
            <option value="Dalam Proses">Dalam Proses</option>
            <option value="Selesai">Selesai</option>
            <option value="Dibatalkan">Dibatalkan</option>
        </select>
        <br />
        <br />
        <br />
        <br />

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>

</html>