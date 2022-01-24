<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kehadiran - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/keluhan.css">

    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- JS -->
    <script href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <!-- JS -->
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>
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
        <a href="<?php echo base_url('Beranda/admin') ?>"> Beranda</a></i></li>
        <a href="<?php echo base_url('Profil/Data_Profil') ?>">Data Mahasiswa</a></i>
        <a href="<?php echo base_url('Hadir/admin') ?>">Daftar Hadir</a></i>
        <a href="<?php echo base_url('Keluhan/admin') ?>">Keluhan</a></i>
        <a href="<?php echo base_url('Beranda/logout'); ?>" onClick="return confirm ('Yakin?')">Logout</a></i>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div><br />
    <!-- Side Bar -->

    <!-- Edit Hadir -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/mahasiswa') ?>" style="text-decoration:none;"> Beranda</a></li></i>
                        <li class="breadcrumb-item active" aria-current="page">Edit Keluhan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="padding-right: 30px;">
            <div class="card col-sm-12">
                <div class="card-header bg-success text-white">
                    Edit Keluhan
                </div>

                <div class="card-body">
                    <form action="<?php echo base_url('Keluhan/fungsiEdit') ?>" method="post">
                        <input type="hidden" name="id_keluhan" value="<?php echo $queryKeluhDetail->id_keluhan ?>">
                        <div class="form-group">
                            <td><b>NIM</b></td>
                            <td><input type="text" name="nim_mhs" class="form-control" value="<?php echo $queryKeluhDetail->nim_mhs ?>"></input></td>
                            <br />
                        </div>

                        <div class="form-group">
                            <td><b>Nama</b></td>
                            <td><input type="text" name="nama_mhs" class="form-control" value="<?php echo $queryKeluhDetail->nama_mhs ?>"></input></td>
                            <br />
                        </div>

                        <div class="form-group">
                            <td><b>Keluhan</b></td>
                            <td><input type="text" name="keluhan" class="form-control" value="<?php echo $queryKeluhDetail->keluhan ?>"></input></td>

                            <br />
                        </div>
                        <button colspan="3" type="submit" class="btn btn-warning" onclick="sweetAlert()">Update</button>
                        <a class="btn btn-success" href=" <?php echo base_url('Keluhan/edit_keluhan') ?>">Kembali</a>
                    </form>
                </div>
            </div>
        </div><br />
        <!-- Edit Hadir -->

        <!-- alert -->
        <script type="text/javascript">
            function sweetAlert() {
                Swal.fire(
                    'Berhasil',
                    'Data telah diupdate!',
                    'success'
                )
            }
        </script>

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