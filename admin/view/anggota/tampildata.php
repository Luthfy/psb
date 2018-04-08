<?php

    $query = $koneksi->query("SELECT * FROM anggota");

    $i = 1;

?>

<h2>Master Data Anggota</h2>
<hr>
<div class="table-responsive">
    <a class="btn btn-success" href="?p=tambahanggota"><i class="glyphicon glyphicon-plus-sign"></i>   Tambah Anggota</a>
    <br> <br>
    <table class="table table-hover table-bordered">
        <tr class="row-header">
            <th>No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
        <?php while($r = $query->fetch_array()) : ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td><?php echo "AG-".$r['id_anggota']; ?></td>
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['alamat']; ?></td>
                <td><?php echo $r['angkatan']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="?p=ubahanggota&id=<?php echo $r['id_anggota']; ?>"><i class="glyphicon glyphicon-edit"></i>  Ubah</a>
                    <a class="btn btn-danger btn-sm" href="?p=hapusanggota&id=<?php echo $r['id_anggota']; ?>" onClick="return confirm('Anda Yakin?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="7"> Anggota Yang Terdaftar : <b><?php echo $query->num_rows." Orang"; ?></b></td>
        </tr>
    </table>
</div>
