<?php

    $koneksi = new mysqli("localhost","root","","psb");

    $id = $_GET['id'];

    $query = $koneksi->query("DELETE FROM kategori WHERE id_kat = '$id'");

    if (!$query) {
        echo "<script>alert('Gagal Dihapus');</script>";
        header('location:admin.php?p=masterkategori');
        die;
    } else {
        header('location:admin.php?p=masterkategori');
        die;
    }
?>
