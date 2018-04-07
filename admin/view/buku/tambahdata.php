<?php

    $koneksi = new mysqli("localhost", "root","","psb");

    $judul = $_POST['inputJudul'];
    $penulis = $_POST['inputPenulis'];
    $kategori = $_POST['inputKategori'];

    $query = $koneksi->query("INSERT INTO buku (judul, penulis, id_kat) VALUES ('$judul','$penulis','$kategori')");

    if (!$query) {
        echo "<script>alert('Gagal Dimasukan');</script>";
        header('location:../../admin.php?p=masterbuku');
        die;
    } else {
        header('location:../../admin.php?p=masterbuku');
        die;
    }

?>
