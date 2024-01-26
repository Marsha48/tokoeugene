<!DOCTYPE html>
<html>

<head>
    <title>Barang</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    // halaman ini boleh diakses oleh semua level //
    require "koneksi.php";

    // cari semua barang dari database
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

</body>

</html>