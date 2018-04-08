<?php

    $query = $koneksi->query("SELECT * FROM petugas");

    $i = 1;

?>

<h2>Master Data Petugas</h2>
<hr>
<div class="table-responsive">
    <a class="btn btn-success" href="?p=tambahpetugas"><i class="glyphicon glyphicon-plus-sign"></i>   Tambah Petugas</a>
    <br><br>
    <table class="table table-hover table-bordered">
        <tr class="row-header">
            <th>No</th>
            <th>ID Petugas</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>AccessLevel</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td><?php echo "PG-".$r['id_petugas']; ?></td>
                <td><?php echo $r['nama_petugas']; ?></td>
                <td><?php echo $r['jabatan_petugas']; ?></td>
                <td><?php echo $r['AccessLevel']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo "**********"; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=ubahpetugas&id=<?php echo $r['id_petugas']; ?>"><i class="glyphicon glyphicon-edit"></i>  Ubah</a>
                    <a class="btn btn-danger" href="?p=hapuspetugas&id=<?php echo $r['id_petugas']; ?>" onClick="return confirm('Anda Yakin?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="8"> Petugas Yang Terdaftar : <b><?php echo $query->num_rows." Orang"; ?></b></td>
        </tr>
    </table>
</div>
