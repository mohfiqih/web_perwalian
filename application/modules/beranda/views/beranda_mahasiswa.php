<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/beranda.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/header.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <!-- JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>

</head>

<style>
    body {
        position: relative;
        height: 110vh;
        background-image: url(https://1.bp.blogspot.com/-7c64_Plgb0s/YRVGZtxSmyI/AAAAAAAADnQ/pGeEcroH89MuYMoRgPgzGExNzJ5DzF3ZACLcBGAsYHQ/s2048/bg.jpg);
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>

    <!-- Side Bar -->
    <div class="topnav" id="myTopnav">
        <b>
            <div class="eperwalian"><a>E-PERWALIAN</a></div>
        </b>
        <a href="<?php echo base_url('Beranda/mahasiswa') ?>"> Beranda</a></i></li>
        <a href="<?php echo base_url('Profil/Daftar_Profil') ?>">Profil</a></i>
        <a href="<?php echo base_url('Hadir/Daftar_Hadir') ?>">Daftar Hadir</a></i>
        <a href="<?php echo base_url('Keluhan/Daftar_Keluhan') ?>">Keluhan</a></i>
        <a href="<?php echo base_url('Beranda/logout'); ?>" onClick="return confirm ('Yakin?')">Logout</a></i>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div><br />
    <!-- Side Bar -->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>

</html>