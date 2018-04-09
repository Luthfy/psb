<h2>Dashboard</h2>
<hr>
<div class="">
    <div class="kotak totalAnggota">

        <?php

            $query = $koneksi->query("SELECT * FROM anggota ORDER BY id_anggota DESC LIMIT 2");
            $q     = $koneksi->query("SELECT * FROM anggota");
            $i = 1;
        ?>

        <h4 class="judulDashboard">Total Buku</h4>
        <div class="content-right">
            <strong><?php echo $q->num_rows; ?> Orang </strong>
        </div>
        <hr>
        <b><p>Anggota Terakhir : </p></b>
        <?php
            while ($r = $query->fetch_array()):
        ?>
            <b><p><?php echo $i++.". ".$r['nama']." - Angkatan ".$r['angkatan']; ?></p></b>
        <?php
            endwhile;
        ?>
    </div>
    <br>
    <div class="kotak totalBuku">

        <?php

            $query = $koneksi->query("SELECT * FROM buku ORDER BY id_buku DESC LIMIT 2");
            $q     = $koneksi->query("SELECT * FROM buku");
            $i = 1;
        ?>

        <h4 class="judulDashboard">Total Buku</h4>
        <div class="content-right">
            <strong><?php echo $q->num_rows; ?> Buku </strong>
        </div>
        <hr>
        <b><p>Buku Terakhir Yang Dimasukan : </p></b>
        <?php
            while ($r = $query->fetch_array()):
        ?>
            <b><p><?php echo $i++.". ".$r['judul']." - ".$r['penulis']; ?></p></b>
        <?php
            endwhile;
        ?>
    </div>
</div>
