<?php
    session_start();

    $koneksi = new mysqli("localhost", "root", "", "psb");

    $username = $_POST['inputUsername'];
    $password = MD5($_POST['inputPassword']);

    $query = $koneksi->query("SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");

    if ($query->num_rows == '1') {
        $r = $query->fetch_array();
        $_SESSION['status'] = 'telahLogin';
        $_SESSION['nama'] = $r['nama_pegawai'];
        header('location:admin.php?p=dashboard');
        die();
    } else {
        header('location:index.php');
        die();
    }

?>
