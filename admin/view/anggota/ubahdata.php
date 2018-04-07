<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id       = $_POST['inputID'];
    $nama     = $_POST['inputName'];
    $alamat   = $_POST['inputAlamat'];
    $angkatan = $_POST['inputAngkatan'];

    $sql = "UPDATE anggota SET nama = '$nama', alamat = '$alamat', angkatan = '$angkatan' WHERE id_anggota = '$id'";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Diperbarui');</script>";
        header('location:../../admin.php?p=masteranggota');
        die;
    } else {
        header('location:../../admin.php?p=masteranggota');
        die;
    }
