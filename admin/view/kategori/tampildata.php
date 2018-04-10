<?php

    $query = $koneksi->query("SELECT * FROM kategori");

    $i = 1;

?>

<h2>Master Data Kategori</h2>
<hr>
<div class="table-responsive">
    <a class="btn btn-success" href="?p=tambahkategori"><i class="glyphicon glyphicon-plus-sign"></i>   Tambah Kategori</a>
    <br><br>
    <table class="table table-hover table-bordered">
        <tr class="row-header">
            <th>No</th>
            <th>ID Kategori</th>
            <th>Keterangan</th>
            <th>Kode Rak</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td><?php echo $r['id_kat']; ?></td>
                <td><?php echo $r['keterangan']; ?></td>
                <td><?php echo $r['id_rak']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="?p=ubahkategori&id=<?php echo $r['id_kat']; ?>"><i class="glyphicon glyphicon-edit"></i>  Ubah</a>
                    <a class="btn btn-danger btn-sm" href="?p=hapuskategori&id=<?php echo $r['id_kat']; ?>" onClick="return confirm('Anda Yakin?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Kategori Yang Terdaftar : <b><?php echo $query->num_rows." Kategori"; ?></b></td>
        </tr>
    </table>
</div>
