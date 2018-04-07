<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id            = $_POST['inputID'];
    $nama          = $_POST['inputName'];
    $jabatan       = $_POST['inputJabatan'];
    $AccessLevel   = $_POST['inputAccessLevel'];
    $username      = $_POST['inputUsername'];
    $password      = $_POST['inputPassword'];

    $sql = "UPDATE petugas SET
        nama_petugas = '$nama',
        jabatan_petugas = '$jabatan',
        AccessLevel = '$AccessLevel',
        username = '$username'
        WHERE id_petugas = '$id'";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Diperbarui');</script>";
        header('location:../../admin.php?p=masterpetugas');
        die;
    } else {
        header('location:../../admin.php?p=masterpetugas');
        die;
    }
