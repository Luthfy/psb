<?php

    $koneksi = new mysqli("localhost", "root","","psb");

    $id         = $_POST['inputID'];
    $keterangan = $_POST['inputKeterangan'];
    $rak        = $_POST['inputRak'];

    $query = $koneksi->query("INSERT INTO kategori (id_kat, keterangan, id_rak) VALUES ('$id','$keterangan','$rak')");

    if (!$query) {
        echo "<script>alert('Gagal Dimasukan');</script>";
        header('location:../../admin.php?p=masterkategori');
        die;
    } else {
        header('location:../../admin.php?p=masterkategori');
        die;
    }

?>
