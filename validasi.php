<?php

require "koneksi.php";

// username dan password diambil dari login.php //
$username = $_POST["username"];
$password = $_POST["password"];

// dicari dari tabel user yang username-nya dari login.php //
$sql = "SELECT * FROM user WHERE username = '$username'";
$query = mysqli_query($koneksi, $sql);
$jumlah_user = mysqli_num_rows($query);

if ($jumlah_user == 1) {
    // jika sama persis 1 user yang username-nya sama //
    // data user tersebut di ambil (fetch), lalu pasword-nya tidak di cek (verify) //
    $user = mysqli_fetch_array($query);
    $password_benar = password_verify($password, $user["password"]);

    if ($password_benar) {
        // jika password benar, sesi login dimulai //
        session_start();

        //  lalu seting siapa username yang login dan levelnya apa  //
        $_SESSION["id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["level"] = $user["level"];

        // lalu pindah ke halaman home //
        header("location: home.php");
    } else {
        echo "username atau pasword tidak valid";
    }
} else {
    echo "username tidak di temukan";
}
