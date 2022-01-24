<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hadir - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/hadir.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <script href="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- CSS -->
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
        <a href="<?php echo base_url('Beranda/dosen') ?>"> Beranda</a></i></li>
        <a href="<?php echo base_url('Profil/Data_Profil_Dosen') ?>">Data Mahasiswa</a></i>
        <a href="<?php echo base_url('Hadir/hadir_dosen') ?>">Daftar Hadir</a></i>
        <a href="<?php echo base_url('Keluhan/keluhan_dosen') ?>">Keluhan</a></i>
        <a href="<?php echo base_url('Beranda/logout'); ?>" onClick="return confirm ('Yakin?')">Logout</a></i>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div><br />
    <!-- Side Bar -->

    <!-- Tabel Daftar Hadir -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/dosen') ?>" style="text-decoration:none;"> Beranda</a></li></i>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Hadir</li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Daftar Hadir</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="padding-right: 30px;">
            <div class="card col-sm-12">
                <div class="card-header bg-success text-white">
                    Table Daftar Hadir
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama Mahasiswa
                            </th>
                            <th>
                                Keterangan
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>

                        <?php
                        $count = 0;
                        foreach ($queryAllMhs as $row) {
                            $count = $count + 1;
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row->id_hadir ?>
                                </td>
                                <td>
                                    <?php echo $row->nim_mhs ?>
                                </td>
                                <td>
                                    <?php echo $row->nama_mhs ?>
                                </td>
                                <td>
                                    <?php echo $row->keterangan ?>
                                </td>

                                <td>
                                    <a class="btn bg-danger text-white" href="<?php echo base_url('Hadir/fungsiDeleteDosen') ?>/<?php echo $row->id_hadir ?>"><i class="fas fa-trash"></a></i>
                                </td>
                            </tr>
                        <?php } ?>
                    </table><br />

                    <b>
                        <label>Jumlah Hadir : </b> <?php echo $jml_hdr; ?> Mahasiswa</label>
                    </b>

                </div>
            </div>
        </div></br>
        <!-- Tabel Daftar Hadir -->

        <!-- JScript -->
        <script href="<?= base_url('assets/js'); ?>bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>

        <!-- sidebar -->
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