 <?php

    session_start();

    // sesi di akhir
    session_destroy();

    // pindah ke halaman login //
    header("location: login.php ");
