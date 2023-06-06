<html>
    <head>
    <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            @media only screen and (max-width: 600px) {
                table {
                    font-size: 12px;
                }

                th, td {
                    padding: 5px;
                }
            }
        </style>
    </head>
    <body>
        <h1>Data Pemesanan Undangan Digital</h1>

        <table>
            <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Waktu Pemesanan</th>
                <th>Detail Informasi Acara</th>
                <th>Waktu Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Status Pesanan</th>
            </tr>
            <?php 
                require_once "config.php";

                $sql = "SELECT users.email, 
                                pesanan.tanggal_pemesanan, 
                                pesanan.id_pesanan,
                                pesanan.desain,
                                pesanan.nama_pengantin_pria,
                                pesanan.nama_pengantin_wanita,
                                pesanan.nomor_hp,
                                pesanan.lokasi_acara,
                                pesanan.waktu_acara,
                                pesanan.tanggal_acara,
                                pesanan.nama_ayah_pengantin_pria,
                                pesanan.nama_ibu_pengantin_pria,
                                pesanan.nama_ayah_pengantin_wanita,
                                pesanan.nama_ibu_pengantin_wanita,
                                pesanan.ayat_kitab_suci,
                                pesanan.foto_pengantin_pria,
                                pesanan.foto_pengantin_wanita,
                                pesanan.foto_prewedd,
                                pesanan.foto_galeri,
                                pesanan.norek_pengantin_pria,
                                pesanan.norek_pengantin_wanita,
                                pesanan.lagu,
                                pesanan.status_pesanan,
                                pembayaran.tanggal,
                                pembayaran.bukti_pembayaran,
                                pembayaran.status_pembayaran,
                                pembayaran.id_pembayaran
                FROM users
                JOIN pesanan ON users.id = pesanan.iduser
                JOIN pembayaran ON users.id = pembayaran.iduser
                ORDER BY pesanan.id_pesanan DESC";

                    $result = mysqli_query($conn, $sql);
                    $nomor = 0;
                    while ($row = mysqli_fetch_array($result)){
                        $nomor++;
                        ?>
                            <tr>
                                <td><?php echo $nomor;?></td>
                                <td><?php echo $row[0]?></td>
                                <td><?php echo $row[1]?></td>
                                <td>
                                    <b>Type Desain : </b><?php echo $row[3];?><br/>
                                    <b>Nama Pengantin Pria : </b><?php echo $row[4];?><br/>
                                    <b>Nama Pengantin Wanita : </b><?php echo $row[5];?><br/>
                                    <b>Nomor HP : </b><?php echo $row[6];?><br/>
                                    <b>Lokasi Acara : </b><?php echo $row[7];?><br/>
                                    <b>Waktu Acara</b><?php echo $row[8];?><br/>
                                    <b>Tanggal Acara : </b><?php echo $row[9];?><br/>
                                    <b>Nama Ayah Pengantin Pria : </b><?php echo $row[10];?><br/>
                                    <b>Nama Ibu Pengantin Pria : </b><?php echo $row[11];?><br/>
                                    <b>Nama Ayah Pengantin Wanita : </b><?php echo $row[12];?><br/>
                                    <b>Nama Ibu Pengantin Wanita : </b><?php echo $row[13];?><br/>
                                    <b>Ayat Kitab Suci : </b><?php echo $row[14];?><br/>
                                    <b>Foto Pengantin Pria : </b><?php echo $row[15];?><br/>
                                    <b>Foto Pengantin Wanita : </b><?php echo $row[16];?><br/>
                                    <b>Foto Prewedd : </b><?php echo $row[17];?><br/>
                                    <b>Foto Galeri : </b><?php echo $row[18];?><br/>
                                    <b>Norek Pengantin Pria : </b><?php echo $row[19];?><br/>
                                    <b>Norek Pengantin Wanita : </b><?php echo $row[20];?><br/>
                                    <b>Lagu : </b><?php echo $row[21];?>
                                </td>
                                <td><?php echo $row[23]?></td>
                                <td><?php echo $row[24]?></td>
                                <td>
                                    <?php echo $row[25]?>
                                    <a href="editstatuspembayaran.php?id=<?php echo $row[26]; ?>" class="edit">Edit</a>
                                </td>
                                <td>
                                    <?php echo $row[22]?>
                                    <a href="editstatuspesanan.php?id=<?php echo $row[2]; ?>" class="edit">Edit</a>
                                </td>
                            </tr>
                        <?php
                    }
            ?>
        </table>
    </body>
</html>