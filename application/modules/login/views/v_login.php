<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Perwalian</title>
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <!-- CSS -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <style>
        body {
            background-image: url(https://1.bp.blogspot.com/-NEPQVmv8rgk/YRVivkYBpNI/AAAAAAAADng/zO6mUXBs3NEZhexJAS225t0QMmqqhztsgCLcBGAsYHQ/s2048/bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Akhir Login -->
    <div class="hold-transition login-page">
        <div class="login-box"><br />
            <div class="login-logo">
                <div class="header" style="font-size: 13px;text-align:center;margin-top:8px">
                    <center><a href="#"><img src="https://sikapta.d3komputer.poltektegal.ac.id/assets/uploads/poltek.png" style="margin-bottom:10px" class="img-fluid" width="100" /></a>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><b>Perwalian</b></h1>
                            <h1 class="h4 text-gray-900 mb-4"><b>DIII Teknik Komputer</b></h1>
                        </div>
                    </center>
                    <a href="#"></a>
                </div>
            </div>
        </div>

        <div id="card">
            <div class="login-page">
                <div class="container-fluid">
                    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
                    <main id="content" class="widget-login-container" role="main">
                        <!-- Page content -->
                        <div class="row align-item-center">
                            <div class="col-md-12">
                                <section class="widget widget-login bg-transparent animated fadeInUp">
                                    <div class="widget-body"></br>
                                        <b>
                                            <p class="widget-login-info" style="font-size:20px;text-align:center;margin-top:8px;color: black">
                                                LOGIN
                                            </p>
                                        </b>

                                        <?php echo form_open(base_url('Login/proses')); ?>

                                        <div role="group" class="form-group">

                                            <div>
                                                <div role="group" class="input-group">
                                                    <input type="text" id="username" type="username" name="username" value="" required="required" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div role="group" class="form-group">

                                            <div>
                                                <div role="group" class="input-group">
                                                    <input type="password" id="inputPassword" value="" required="required" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="checkbox" class="offset-sm-0" id="show-password"> Tampilkan Password

                                    </div>
                                    <br />
                                    <div class="clearfix">
                                        <div class="btn-toolbar">
                                            <button type="submit" class="btn2 btn btn-block">Login</button>
                                        </div><br>
                                        <div class="" style="font-size: 13px;" align="center"> Hubungi Administrator<br>untuk registrasi akun / lupa password</div>
                                    </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Akhir Login -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#inputPassword').attr('type', 'text');
                } else {
                    $('#inputPassword').attr('type', 'password');
                }
            });
        });
    </script>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>