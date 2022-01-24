<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Keluhan - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/keluhan.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">

    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <script href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <script href="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.min.js"></script>
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

    <!-- Form Keluhan -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/mahasiswa') ?>" style="text-decoration:none;"> Beranda</a></li></i>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Keluhan</li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Daftar Keluhan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="padding-right: 30px;">
            <div class="card col-sm-12">
                <div class="card-header bg-success text-white">
                    Form Keluhan
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('Keluhan/fungsiTambah') ?>" method="post">
                        <div class="form-group">
                            <label><b>NIM Mahasiswa</b></label><br />
                            <input type="text" name="nim_mhs" class="form-control" placeholder="Masukkan Nim Anda" required></input>
                            <br />
                        </div>

                        <div class="form-group">
                            <label><b>Nama Mahasiswa</b></label><br />
                            <input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama Lengkap" required></input>
                            <br />
                        </div>

                        <div class="form-group">
                            <label><b>Keluhan</b></label><br />
                            <input type="text" name="keluhan" class="form-control" placeholder="Ketik Keluhan" required></input>
                            <br />
                        </div>

                        <div class="main">
                            <button id="flash" colspan="3" type="submit" class="btn bg-success text-white" name=" btambah" onclick="sweetAlert()">Kirim Keluhan</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Keluhan -->

    <!-- Table Input -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="padding-right: 30px;">
            <div class="card col-sm-12">
                <div class="card-header bg-success text-white">
                    Table Keluhan
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Keluhan
                            </th>

                            <?php
                            $count = 0;
                            foreach ($queryAllKeluh as $row) {
                                $count = $count + 1;
                            ?>

                        <tr>

                            <td>
                                <?php echo $row->nim_mhs ?>
                            </td>
                            <td width="300px">
                                <?php echo $row->nama_mhs ?>
                            </td>
                            <td>
                                <?php echo $row->keluhan ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>

                    <b>
                        <label>Jumlah Keluhan : </b> <?php echo $jml_keluhan; ?> Mahasiswa</label>
                    </b>

                </div>
            </div>
        </div>
    </div><br />

    <!-- alert -->
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil',
                'Keluhan anda telah dikirim',
                'success'
            )
        }
    </script>

    <!-- JScript -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <!-- JScript -->
</body>

</html>