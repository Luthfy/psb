<?php

    $koneksi = new mysqli("localhost", "root", "", "psb");

    $nama     = $_POST['inputName'];
    $alamat   = $_POST['inputAlamat'];
    $angkatan = $_POST['inputAngkatan'];

    $query = $koneksi->query("INSERT INTO anggota (nama, alamat, angkatan) VALUES ('$nama', '$alamat', '$angkatan')");

    if (!$query) {
        echo "<script>alert('Gagal Dimasukan');</script>";
        header('location:../../admin.php?p=masteranggota');
        die;
    } else {
        header('location:../../admin.php?p=masteranggota');
        die;
    }



?>
