<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/gambar.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <!-- JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>

</head>

<style>
    body {
        background-color: #eeeee4;
    }

    .eperwalian {
        color: whitesmoke;
    }
</style>

<body>

    <!-- Side Bar -->
    <div class="topnav" id="myTopnav">
        <b>
            <div class="eperwalian"><a>E-PERWALIAN</a></div>
        </b>
        <a href="<?php echo base_url('Beranda/dosen') ?>"> Beranda</a></i></li>
        <a href="<?php echo base_url('Profil/Data_Profil_Dosen') ?>">Data Mahasiswa</a></i>
        <a href="<?php echo base_url('Hadir/hadir_dosen') ?>">Daftar Hadir</a></i>
        <a href="<?php echo base_url('Keluhan/keluhan_dosen') ?>">Keluhan</a></i>
        <a href="<?php echo base_url('Beranda/logout'); ?>" onClick="return confirm ('Yakin?')">Logout</a></i>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div><br>
    <!-- Side Bar -->

    <div class="beranda" style="padding-left: 30px; padding-right: 30px;">
        <div class="gabung">
            <h5>Beranda Dosen</h5>
            <hr>
        </div>
    </div>

    <div class="row" style="padding-left: 30px; padding-right: 30px;">
        <div class="col-sm-3">
            <div class="card text-white bg-primary mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Absensi</h5>
                    <p class="card-text"><?php echo $jml_hdr; ?> Mahasiswa</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-secondary mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Keluhan</h5>
                    <p class="card-text"><?php echo $jml_keluhan; ?> Mahasiswa</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-success mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Profil</h5>
                    <p class="card-text"><?php echo $jml_data ?> Mahasiswa</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-danger mb-4">
                <div class="card-body">
                    <h5 class="card-title">Persentase Kehadiran</h5>
                    <p class="card-text"> %</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cardgambar col-sm-12" style="padding-left: 0px; padding-right: 0px;">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title">Politeknik Harapan Bersama</h5>
        </div>
        <div class="card-body bg-dark col-sm-12">
            <img class="col-sm-12" src="https://1.bp.blogspot.com/-mHWtaywBOaY/YRVT345nB6I/AAAAAAAADnY/g-7I3OJCkrgRtYTKlxevySABgQOTQVTmgCLcBGAsYHQ/s2048/bg.jpg" height="1000">
        </div>
    </div>

    <div class="footer">
        <div class="container bg-white">
            <p> Copyright </p>
        </div>
    </div>

</body>

</html>