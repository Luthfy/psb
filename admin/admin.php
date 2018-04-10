<?php
    session_start();

    if ($_SESSION['status'] != 'telahLogin') {
        header('location:index.php');
        die;
    }

    $koneksi = new mysqli("localhost", "root", "", "psb");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PSB</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/master.css">
</head>
<body>
    <div class="navbar navbar-small">
        <div class="left">
            <h3 class="PSBbrand"><strong>Pusat Sumber Belajar</strong> <sup class="btn-danger">Beta</sup></h3>
        </div>
        <div class="right">
            <ul class="navigasi">
				<li><a href="admin.php?p=dashboard">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="admin.php?p=masterbuku">KATALOG BUKU</a></li>
                <li class="logout"> <a href="admin.php?p=logout">LOGOUT</a> </li>
			</ul>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="row content">
        <!-- Navigasi -->
        <div class="col-md-2 col-lg-2 menu" style="padding-right:0;">
            <h2>Navigasi</h2>
            <hr>
            <ul>
                <a href="?p=dashboard"><li><i class="glyphicon glyphicon-home"></i> Dashboard </li></a>
                <a href="?p=masteranggota"><li><i class="glyphicon glyphicon-user"></i> Master Data Anggota </li></a>
                <a href="?p=masterbuku"><li><i class="glyphicon glyphicon-book"></i> Master Data Buku </li></a>
                <a href="?p=masterkategori"><li><i class=" glyphicon glyphicon-tags"></i> Master Data Kategori </li></a>
                <a href="?p=masterrak"><li><i class="glyphicon glyphicon-folder-open"></i> Master Data Rak Buku </li></a>
                <a href="?p=masterpetugas"><li><i class="glyphicon glyphicon-user"></i> Master Data Petugas </li></a>
            </ul>
        </div>
        <!-- Navigasi -->

        <div class="col-md-10 col-lg-10 data">
            <?php
                // ROUTING
                switch ($_GET['p']) {
                    // Dashboard
                    case 'dashboard':
                        include 'view/dashboard.php';
                        break;
                    case 'logout':
                        unset($_SESSION['status']);
                        session_destroy();
                        header('location:../index.html');
                        die;
                        break;
                    // anggota
                    case 'masteranggota':
                        include 'view/anggota/tampildata.php';
                        break;
                    case 'tambahanggota':
                        include 'view/anggota/formdata.php';
                        break;
                    case 'ubahanggota':
                        include 'view/anggota/formdata.php';
                        break;
                    case 'hapusanggota':
                        include 'view/anggota/hapusdata.php';
                        break;
                    // buku
                    case 'masterbuku':
                        include 'view/buku/tampildata.php';
                        break;
                    case 'tambahbuku':
                        include 'view/buku/formdata.php';
                        break;
                    case 'ubahbuku':
                        include 'view/buku/formdata.php';
                        break;
                    case 'hapusbuku':
                        include 'view/buku/hapusdata.php';
                        break;
                    // kategori
                    case 'masterkategori':
                        include 'view/kategori/tampildata.php';
                        break;
                    case 'tambahkategori':
                        include 'view/kategori/formdata.php';
                        break;
                    case 'ubahkategori':
                        include 'view/kategori/formdata.php';
                        break;
                    case 'hapuskategori':
                        include 'view/kategori/hapusdata.php';
                        break;
                    // Rak
                    case 'masterrak':
                        include 'view/rak/tampildata.php';
                        break;
                    case 'tambahrak':
                        include 'view/rak/formdata.php';
                        break;
                    case 'ubahrak':
                        include 'view/rak/formdata.php';
                        break;
                    case 'hapusrak':
                        include 'view/rak/hapusdata.php';
                        break;
                    // Petugas
                    case 'masterpetugas':
                        include 'view/petugas/tampildata.php';
                        break;
                    case 'tambahpetugas':
                        include 'view/petugas/formdata.php';
                        break;
                    case 'ubahpetugas':
                        include 'view/petugas/formdata.php';
                        break;
                    case 'hapuspetugas':
                        include 'view/petugas/hapusdata.php';
                        break;
                    // Kondisi default
                    default:
                        header("location:admin.php?p=dashboard");
                        break;
                }
            ?>
        </div>
    </div>

    <div class="small-footer">
        <p class="copyright">
            All Right Reserved by Learning Resource Center 2017
        </p>
        <ul class="right">
            <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i> </a></li>
            <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i> </a></li>
            <li><a href="http://www.plus.google.com/+QizhayaHalimaTusshafna"><i class="fa fa-google-plus"></i> </a></li>
            <li><a href="http://www.youtube.com/qizhayahalimatusshafna"><i class="fa fa-youtube"></i> </a></li>
            <li><a href="mailto:qizhayahalimatusshfan@gmail.com"><i class="fa fa-envelope"></i> qizhayahalimatusshafna@gmail.com</a></li>
        </ul>
    </div>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/master.js"></script>
</body>
</html>
