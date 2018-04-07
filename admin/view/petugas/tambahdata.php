<?php

    $koneksi = new mysqli("localhost", "root", "", "psb");

    $nama          = $_POST['inputName'];
    $jabatan       = $_POST['inputJabatan'];
    $AccessLevel   = $_POST['inputAccessLevel'];
    $username      = $_POST['inputUsername'];
    $password      = MD5($_POST['inputPassword']);

    $sql = "INSERT INTO petugas (nama_petugas, jabatan_petugas, AccessLevel, username, password) VALUES ('$nama','$jabatan','$AccessLevel','$username','$password')";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Dimasukan');</script>";
        header('location:../../admin.php?p=masterpetugas');
        die;
    } else {
        header('location:../../admin.php?p=masterpetugas');
        die;
    }



?>
