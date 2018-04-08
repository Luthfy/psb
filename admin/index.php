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
            <h3 class="PSBbrand"><strong>Pusat Sumber Belajar</strong></h3>
        </div>
        <div class="right">
            <ul class="navigasi">
				<li><a href="admin.php?p=dashboard">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="admin.php?p=masterbuku">KATALOG BUKU</a></li>
                <li class="logout"> <a href="../index.html">Kembali Ke Pencarian</a> </li>
			</ul>
        </div>
    </div>

    <!-- Login -->
    <div class="row login">
        <div class="col-md-4 col-lg-4">

        </div>
        <div class="col-md-4 col-lg-4 form-lg">
            <h3 class="form-header">Form Login</h3><hr>
            <form class="" action="ceklogin.php" method="post">
                <div class="form-group">
                    <label for="inputUsername" class="control-label">Username : </label>
                    <input class="form-control" type="text" name="inputUsername" value="" placeholder="Masukan Username Anda">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label">Password : </label>
                    <input class="form-control" type="password" name="inputPassword" value="" placeholder="Masukan Password Anda">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block btn-lg" type="submit" name="">Login</button> <br>
                    <button class="btn btn-default btn-block btn-lg" type="reset" name="">Reset</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-lg-4">

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
