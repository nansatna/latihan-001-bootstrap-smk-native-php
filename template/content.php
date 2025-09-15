
<?php
    // Tentukan target file sesuai pola
    if ($pages == '') {
        // default ke beranda
        $target = "pages/umum/beranda.php";
    } elseif ($files != '') {
        // kalau ada sub-folder, misalnya jurusan/rpl
        $target = "pages/$pages/$files.php";
    } else {
        // kalau hanya segmen pertama, maka arahkan ke pages/umum/<halaman>.php
        $target = "pages/umum/$pages.php";
    }

    // cek apakah file ada
    if (file_exists($target)) {
        include $target;
    } else {
        include "pages/umum/beranda.php"; // fallback
    }
?>