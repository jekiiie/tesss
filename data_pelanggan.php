<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_pelanggan";
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
        <th>Id Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $row['id_pelanggan']?></td>
        <td><?php echo $row['nama_pelanggan']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['email']?></td>
        
        <?php endwhile ?>
    </tr>
    </table>
    </div>
</body>
</html>