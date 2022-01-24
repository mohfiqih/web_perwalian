<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Profil - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/profil.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <!-- JS -->
    <script href="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>
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
        <a href="<?php echo base_url('Keluhan/keluhan_admin') ?>">Keluhan</a></i>
        <a href="<?php echo base_url('Beranda/logout'); ?>" onClick="return confirm ('Yakin?')">Logout</a></i>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div><br />
    <!-- Side Bar -->

    <!--- Table Biodata Diri --->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/mahasiswa') ?>" style="text-decoration:none;"> Beranda</a></li></i>
                        <li class="breadcrumb-item active" aria-current="page">Lihat Profil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <center>
        <div class="row" style="margin-left: 10px; margin-right: 30px;">
            <div class="card col-sm-12" style="padding-right: 30px;">
                <div class="card col-sm-12">
                    <div class="card-header bg-success text-white">
                        Data Mahasiswa
                    </div>

                    <div class="card-body">

                        <?php
                        $count = 0;
                        foreach ($queryAllProf as $row) {
                            $count = $count + 1;
                        ?>



                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>NIM</th>
                                    <th>:</th>
                                    <td><?php echo $row->nim ?></td>
                                </tr>

                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>:</th>
                                    <td><?php echo $row->nama ?></td>
                                </tr>

                                <tr>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>:</th>
                                    <td><?php echo $row->ttl ?></td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <td><?php echo $row->alamat ?></td>
                                </tr>

                                <tr>
                                    <th>Nomor Telepon</th>
                                    <th>:</th>
                                    <td><?php echo $row->no_telp ?></td>
                                </tr>

                                <tr>
                                    <th>IPK</th>
                                    <th>:</th>
                                    <td><?php echo $row->ipk ?></td>
                                </tr>

                            </table>

                            <div class="buton">
                                <a class="btn bg-warning text-black" href="<?php echo base_url('Profil/edit_profil') ?> / <?php echo $row->id_profil ?>"> Edit</a>
                            <?php } ?>
                            <a class="btn btn-success" href="<?php echo base_url('Profil/Daftar_Profil') ?>"> Kembali</a>
                            </div>


                    </div></br></br>
    </center>
    <!-- Table Biodata Diri -->

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