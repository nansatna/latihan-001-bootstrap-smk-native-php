
<?php
    error_reporting(0);
    include "common/routing.php"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column min-vh-100">
        
        <!--navbar start-->
            <?php include "template/navbar.php" ?>
        <!--navbar end-->

        <!--content start-->
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
        <!--content end-->

        <!--footer start-->
            <?php include "template/footer.php" ?>
        <!--footer end-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>