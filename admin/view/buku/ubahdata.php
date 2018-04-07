<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id       = $_POST['inputID'];
    $judul    = $_POST['inputJudul'];
    $penulis  = $_POST['inputPenulis'];
    $kategori = $_POST['inputKategori'];

    $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', id_kat = '$kategori' WHERE id_buku = '$id'";

    $query = $koneksi->query($sql);

    if (!$query) {
        echo "<script>alert('Gagal Diperbarui');</script>";
        header('location:../../admin.php?p=masterbuku');
        die;
    } else {
        header('location:../../admin.php?p=masterbuku');
        die;
    }
