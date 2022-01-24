<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Profil - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/profil.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">

    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>
    <script href="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.min.js"></script>
    <script href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<style>
    body {
        background-color: #eeeee4;
    }
</style>

<body>
    <!-- Side Bar -->
    <div class="topnav" id="myTopnav">
        <a href="#"><b>E-PERWALIAN</a></b>
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

    <!-- Profil -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/mahasiswa') ?>" style="text-decoration:none;"> Beranda</a></li></i>
                        <li class="breadcrumb-item active" aria-current="page">Profil</li>
                        <li class="breadcrumb-item active" aria-current="page">Input Profil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card" style="margin-left: 10px; margin-right: 10px;">
            <div class="card col-sm-12" style="margin-right: 10px;">
                <div class="card-header bg-success text-white">
                    Input Profil Mahasiswa
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('Profil/fungsiTambah'); ?>

                    <div class="form-group">
                        <label><b>Kelas</b></label><br />
                        <input type="text" name="kelas" class="form-control" placeholder="Masukan Nim Anda" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>NIM</b></label><br />
                        <input type="text" name="nim" class="form-control" placeholder="Masukan Nim Anda" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>Nama Lengkap</b></label><br />
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>Tempat Tanggal Lahir</b></label><br />
                        <input type="text" name="ttl" class="form-control" placeholder="Contoh: Brebes 16 Juni 2000" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>Alamat</b></label><br />
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>Nomor Telepon</b></label><br />
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukkan nomor telepon" required></input>
                        <br />
                    </div>

                    <div class="form-group">
                        <label><b>Indeks Prestasi Kumulatif (IPK)</b></label><br />
                        <input type="text" name="ipk" class="form-control" placeholder="Masukkan IPK Terakhir" required></input>
                        <br />
                    </div>

                    <div class="buton">
                        <button type="submit" class="btn bg-success text-white" name="btambah" onclick="sweetAlert()">Tambah Data Diri</button>
                        <!-- <a href="<?php echo base_url('Profil/lihat_profil') ?>" type="submit" class="btn bg-success text-white" name="btambah">Lihat Profil</a> -->
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div><br />
            <!-- Profil -->

            <!-- alert -->
            <script type="text/javascript">
                function sweetAlert() {
                    Swal.fire(
                        'Berhasil',
                        'Data anda sudah terkirim!',
                        'success'
                    )
                }
            </script>

            <!--- JScript --->
            <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>
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
            <!--- JScript --->
</body>

</html>