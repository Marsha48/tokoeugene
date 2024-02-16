<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {
    // jika di sesi ini tidak ada username yang aktif, proses ke logout
    header("location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>

    <nav>
        <a href="home.php">Home</a>
        <a href="user.php">User</a>
        <a href="barang.php">Barang</a>
        <a href="penjualan.php">Penjualan</a>
        <a href="pembelian.php">Pembelian</a>
        <a href="profil.php">Profil</a>
        <a href="logout.php">Log Out</a>
    </nav>

</body>

</html>