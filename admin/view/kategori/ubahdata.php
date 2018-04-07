<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id         = $_POST['inputID'];
    $keterangan = $_POST['inputKeterangan'];
    $rak        = $_POST['inputRak'];

    $sql = "UPDATE kategori SET keterangan = '$keterangan', id_rak = '$rak' WHERE id_kat = '$id'";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Diperbarui');</script>";
        header('location:../../admin.php?p=masterkategori');
        die;
    } else {
        header('location:../../admin.php?p=masterkategori');
        die;
    }
