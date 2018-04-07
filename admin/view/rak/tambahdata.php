<?php

    $koneksi = new mysqli("localhost", "root","","psb");

    $id         = $_POST['inputID'];
    $lemari     = $_POST['inputLemari'];
    $rak        = $_POST['inputRak'];

    $deskripsi  = "Lemari ".$lemari." Rak Nomor ".$rak;

    $query = $koneksi->query("INSERT INTO rak (id_rak, lemari_rak, posisi_rak) VALUES ('$id', '$lemari', '$deskripsi')");

    if (!$query) {
        echo "<script>alert('Gagal Dimasukan');</script>";
        header('location:../../admin.php?p=masterrak');
        die;
    } else {
        header('location:../../admin.php?p=masterrak');
        die;
    }

?>
