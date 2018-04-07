<?php

    $koneksi = new mysqli("localhost","root","","psb");
    $id = $_GET['id'];

    $query = $koneksi->query("DELETE FROM petugas WHERE id_petugas = '$id'");

    if (!$query) {
        echo "<script>alert('Gagal Dihapus');</script>";
        header('location:admin.php?p=masterpetugas');
        die;
    } else {
        header('location:admin.php?p=masterpetugas');
        die;
    }
?>
