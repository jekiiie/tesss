<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_transaksi";
$result = mysqli_query ($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type"text/css" href="data_topi.css">
    <title>Toko Topi Jekii</title>
</head>
<body>
<nav>
        <a class="navigasi" href="http://localhost/toko_topi/home.php">BERANDA</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_barang.php">DATA BARANG</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_pelanggan.php">DATA PELANGGAN</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_transaksi.php">DATA TRANSAKSI</a>
</nav>
    <table border=1>
    <tr>
        <th>ID transaksi </th>
        <th>tanggal</th>
        <th>id_pelanggan</th>
        <th>id_barang</th>
        <th>jumlah</th>
        <th>harga</th>
        <th>Total Pembayaran</th>
        

    </tr>
    <tr>
        <?php while ($row=mysqli_fetch_assoc($result)): ?>
        <tr>
        <td><?= $row['id_transaksi']?> </td>
        <td><?= $row['tanggal']?> </td>
        <td><?= $row['id_pelanggan']?> </td>
        <td><?= $row['id_barang']?> </td>
        <td><?= $row['jumlah']?> </td>
        <td><?= $row['harga']?> </td>
        <td><?= $row['total_pembayaran']?> </td>
        </tr>  
        <?php endwhile ?>
        
    </tr>
    </table>

    
</body>
</html>