<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_barang";
$result = mysqli_query ($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type"text/css" href="data_topi.css">
</head>

<body>
    <nav>
        <a class="navigasi" href="http://localhost/toko_topi/home.php">BERANDA</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_barang.php">DATA BARANG</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_pelanggan.php">DATA PELANGGAN</a>
        <a class="navigasi" href="http://localhost/toko_topi/data_transaksi.php">DATA TRANSAKSI</a>
</nav>

    <table border="1">
    <tr>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Ukuran</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $row['id_barang']?></td>
        <td><?php echo $row['nama_barang']?></td>
        <td><?php echo $row['harga']?></td>
        <td><?php echo $row['ukuran']?></td>
        
        <?php endwhile ?>
    </tr>
    </table>
    </div>
</body>
</html>