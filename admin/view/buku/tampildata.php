<?php

    $query = $koneksi->query("SELECT * FROM KatalogBuku");

    $i = 1;

?>

<h2>Master Data Buku</h2>
<hr>
<div class="table-responsive">
    <a href="?p=tambahbuku">Tambah Buku</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Kode Rak Buku</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo "BK-".$r['No']; ?></td>
                <td><?php echo $r['judul']; ?></td>
                <td><?php echo $r['penulis']; ?></td>
                <td><?php echo $r['kategori']; ?></td>
                <td><?php echo $r['Kode_Rak']." - ".$r['Posisi_Buku']; ?></td>
                <td>
                    <a href="?p=ubahbuku&id=<?php echo $r['No']; ?>">Ubah</a>
                    <a href="?p=hapusbuku&id=<?php echo $r['No']; ?>" onClick="return confirm('Anda Yakin?');">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Buku Yang Terdaftar : <b><?php echo $query->num_rows." Buku"; ?></b></td>
        </tr>
    </table>
</div>
