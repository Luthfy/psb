<?php

    $koneksi = new mysqli("localhost","root","","psb");
    $id = $_GET['id'];

    $query = $koneksi->query("DELETE FROM anggota WHERE id_anggota = '$id'");

    if (!$query) {
        echo "<script>alert('Gagal Dihapus');</script>";
        header('location:admin.php?p=masteranggota');
        die;
    } else {
        header('location:admin.php?p=masteranggota');
        die;
    }
?>
