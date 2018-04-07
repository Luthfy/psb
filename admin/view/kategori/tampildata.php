<?php

    $query = $koneksi->query("SELECT * FROM kategori");

    $i = 1;

?>

<h2>Master Data Kategori</h2>
<hr>
<div class="table-responsive">
    <a href="?p=tambahkategori">Tambah Kategori</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>ID Kategori</th>
            <th>Keterangan</th>
            <th>Kode Rak</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $r['id_kat']; ?></td>
                <td><?php echo $r['keterangan']; ?></td>
                <td><?php echo $r['id_rak']; ?></td>
                <td>
                    <a href="?p=ubahkategori&id=<?php echo $r['id_kat']; ?>">Ubah</a>
                    <a href="?p=hapuskategori&id=<?php echo $r['id_kat']; ?>" onClick="return confirm('Anda Yakin?');">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Kategori Yang Terdaftar : <b><?php echo $query->num_rows." Kategori"; ?></b></td>
        </tr>
    </table>
</div>
