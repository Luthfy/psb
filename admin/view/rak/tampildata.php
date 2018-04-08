<?php

    $query = $koneksi->query("SELECT * FROM rak");

    $i = 1;

?>

<h2>Master Data Rak</h2>
<hr>
<div class="table-responsive">
    <a class="btn btn-success" href="?p=tambahrak"><i class="glyphicon glyphicon-plus-sign"></i>   Tambah Rak</a>
    <br><br>
    <table class="table table-hover table-bordered">
        <tr class="row-header">
            <th>No</th>
            <th>ID Rak</th>
            <th>Lemari</th>
            <th>Posisi Buku Rak</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td><?php echo $r['id_rak']; ?></td>
                <td><?php echo $r['lemari_rak']; ?></td>
                <td><?php echo $r['posisi_rak']; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=ubahrak&id=<?php echo $r['id_rak']; ?>"><i class="glyphicon glyphicon-edit"></i>  Ubah</a>
                    <a class="btn btn-danger" href="?p=hapusrak&id=<?php echo $r['id_rak']; ?>" onClick="return confirm('Anda Yakin?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Rak Buku Yang Dimiliki : <b><?php echo $query->num_rows." Rak Buku"; ?></b>, dan <b><?php echo $koneksi->query("SELECT DISTINCT(lemari_rak) FROM rak")->num_rows." Lemari" ?></b></td>
        </tr>
    </table>
</div>
