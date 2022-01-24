<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda - e-Perwalian - PHB</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/menubar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/gambar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/utama.css">
    <link rel=" stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png">
    <!-- JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" href="<?= base_url('assets/'); ?>"></script>

</head>

<style>
    h1 {
        margin-bottom: 0.5em;
        font-size: 3.6rem;
    }

    p {
        margin-bottom: 0.5em;
        font-size: 1.6rem;
        line-height: 1.6;
    }

    .button {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 25px;
        border-radius: 4px;
    }

    .button-primary {
        position: relative;
        background-color: #c0ca33;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease-in;
        z-index: 1;
    }

    .button-primary:hover {
        color: #fff;
        text-decoration: none;
        margin-bottom: 20%;
    }

    .button-primary::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: #fff;
        border-radius: 4px;
        opacity: 0;
        -webkit-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        transform: scaleX(0.8);
        transition: all 0.3s ease-in;
        z-index: -1;
    }

    .button-primary:hover::after {
        opacity: 1;
        -webkit-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }

    .overlay::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(0, 0, 0, .3);
    }

    .header-area {
        position: relative;
        height: 110vh;
        background-image: url(https://1.bp.blogspot.com/-7c64_Plgb0s/YRVGZtxSmyI/AAAAAAAADnQ/pGeEcroH89MuYMoRgPgzGExNzJ5DzF3ZACLcBGAsYHQ/s2048/bg.jpg);
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repear;
        background-size: cover;
    }

    .banner {
        display: flex;
        align-items: center;
        position: relative;
        height: 100%;
        color: #fff;
        text-align: center;
        z-index: 1;
    }

    .banner h1 {
        font-weight: 800;
    }

    .banner p {
        font-weight: 700;
    }

    .banner a {
        margin-bottom: 20%;
    }

    h1 {
        margin-bottom: 0.5em;
        font-size: 3.6rem;
    }

    p {
        margin-bottom: 0.5em;
        font-size: 1.6rem;
        line-height: 1.6;
    }

    .button {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 25px;
        border-radius: 4px;
    }

    .button-primary {
        position: relative;
        background-color: #c0ca33;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease-in;
        z-index: 1;
    }

    .button-primary:hover {
        color: #c0ca33;
        text-decoration: none;
        margin-bottom: 20%;
    }

    .button-primary::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: #fff;
        border-radius: 4px;
        opacity: 0;
        -webkit-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        transform: scaleX(0.8);
        transition: all 0.3s ease-in;
        z-index: -1;
    }

    .button-primary:hover::after {
        opacity: 1;
        -webkit-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }

    .overlay::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(0, 0, 0, .3);
    }

    .header-area {
        position: relative;
        height: 110vh;
        background-image: url(img/bgtlc.jpg);
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repear;
        background-size: cover;
    }

    .banner {
        display: flex;
        align-items: center;
        position: relative;
        height: 100%;
        color: #fff;
        text-align: center;
        z-index: 1;
    }

    .banner h1 {
        font-weight: 800;
    }

    .banner p {
        font-weight: 700;
    }

    .banner a {
        margin-bottom: 20%;
    }
</style>

<body>

    <header class="header-area overlay" id="content1">
        <div class="banner">
            <div class="container" id="content2"><br /><br /><br /><br /><br />
                <h3>Selamat Datang di Halaman Utama Perwalian</h3><br />
                <h1>e-Perwalian</h1>
                <p>Politeknik Harapan Bersama Tegal</p>
                <a href="<?php echo base_url('Login/index') ?>" style="text-decoration:none;" class="button button-primary">LOGIN</a>
            </div>
        </div>
    </header>

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