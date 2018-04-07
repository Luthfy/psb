<?php

    $koneksi = new mysqli("localhost","root","","psb");
    $id = $_GET['id'];

    $query = $koneksi->query("DELETE FROM buku WHERE id_buku = '$id'");

    if (!$query) {
        echo "<script>alert('Gagal Dihapus');</script>";
        header('location:admin.php?p=masterbuku');
        die;
    } else {
        header('location:admin.php?p=masterbuku');
        die;
    }
?>
