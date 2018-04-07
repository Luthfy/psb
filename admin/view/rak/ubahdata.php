<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id         = $_POST['inputID'];
    $lemari     = $_POST['inputLemari'];
    $rak        = $_POST['inputRak'];

    $sql = "UPDATE rak SET lemari_rak = '$lemari', posisi_rak = '$rak' WHERE id_rak = '$id'";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Diperbarui');</script>";
        header('location:../../admin.php?p=masterrak');
        die;
    } else {
        header('location:../../admin.php?p=masterrak');
        die;
    }
