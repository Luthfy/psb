<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id = $_GET['id'];

    $query = $koneksi->query("DELETE FROM rak WHERE id_rak = '$id'");

    if (!$query) {
        echo "<script>alert('Gagal Dihapus');</script>";
        header('location:admin.php?p=masterrak');
        die;
    } else {
        header('location:admin.php?p=masterrak');
        die;
    }
?>
