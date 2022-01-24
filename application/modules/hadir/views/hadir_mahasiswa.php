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

    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script href="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.min.js">
    </script>
    <script href="<?= base_url('assets/'); ?>bootstrap/animate/sweetalert2.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- CSS -->

    <style>
        .sweetAlert {
            font-size: 1.6rem !important;
        }

        body {
            background-color: #eeeee4;
        }
    </style>

</head>

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

    <!-- Tabel Input Daftar Hadir -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card col-sm-12" style="margin-left: 10px; margin-right: 10px;"><br />
            <div class="gabung" style="margin-left: 20px; margin-right: 10px;">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-home"><a href="<?php echo base_url('Beranda/mahasiswa') ?>" style="text-decoration:none;"> Beranda</a></li></i>
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
                    Input Kehadiran Perwalian
                </div>

                <div class="card-body">

                    <form action="<?php echo base_url('Hadir/fungsiTambah') ?>" method="post">
                        <div class="form-group">
                            <td><b>NIM</b></td>
                            <td><input input type="text" name="nim_mhs" class="form-control" placeholder="Masukkan NIM Anda" required></input></td>
                            <br />
                        </div>

                        <div class="form-group">
                            <td><b>Nama Mahasiswa</b></td>
                            <td><input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan NIM Anda" required></input></td>
                            <br />
                        </div>

                        <div class="form-group">
                            <td><b>Keterangan</b></td>
                            <td><select type="text" name="keterangan" class="form-control" placeholder="Pilih Keterangan" required>
                                    <option>Keterangan</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Alpha">Alpha</option>
                                </select></td>
                            <br />
                        </div>

                        <div class="main">
                            <button id="flash" colspan="3" type="submit" class="btn bg-success text-white" name=" btambah" onclick="sweetAlert()">Tambah Kehadiran</button></a>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Tabel Input Daftar Hadir -->

    <!-- Tabel Daftar Hadir -->
    <div class="row" style="margin-left: 10px; margin-right: 30px;">
        <div class="card" style="padding-right: 30px;">
            <div class="card col-sm-12">
                <div class="card-header bg-success text-white">
                    Table Daftar Hadir
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama Mahasiswa
                            </th>
                            <th>
                                Keterangan
                            </th>
                        </tr>

                        <?php
                        $count = 0;
                        foreach ($queryAllMhs as $row) {
                            $count = $count + 1;
                        ?>
                            <tr>
                                <td>
                                    <justify><?php echo $row->nim_mhs ?></justify>
                                </td>
                                <td width="300px">
                                    <justify><?php echo $row->nama_mhs ?></justify>
                                </td>
                                <td>
                                    <?php echo $row->keterangan ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

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

        <!-- alert -->
        <script type="text/javascript">
            function sweetAlert() {
                Swal.fire(
                    'Berhasil',
                    'Anda sudah absen!',
                    'success'
                )
            }
        </script>

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

        <script>
            $(document).ready(function() {
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function() {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
</body>

</html>