<?php

    $query = $koneksi->query("SELECT * FROM anggota");

    $i = 1;

?>

<h2>Master Data Anggota</h2>
<hr>
<div class="table-responsive">
    <a class="" href="?p=tambahanggota">Tambah Anggota</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo "AG-".$r['id_anggota']; ?></td>
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['alamat']; ?></td>
                <td><?php echo $r['angkatan']; ?></td>
                <td>
                    <a href="?p=ubahanggota&id=<?php echo $r['id_anggota']; ?>">Ubah</a>
                    <a href="?p=hapusanggota&id=<?php echo $r['id_anggota']; ?>" onClick="return confirm('Anda Yakin?');">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Anggota Yang Terdaftar : <b><?php echo $query->num_rows." Orang"; ?></b></td>
        </tr>
    </table>
</div>
