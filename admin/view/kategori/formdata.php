<?php

    if ($_GET['p'] == 'ubahkategori') {

        $id       = $_GET['id'];
        $query    = $koneksi->query("SELECT * FROM kategori WHERE id_kat = '$id'");
        $result   = $query->fetch_array();
        $rak      = $koneksi->query("SELECT * FROM rak");
?>
        <div class="">
            <h2>FORM PEMBARUAN KATEGORI</h2>
            <hr>
            <form class="" action="view/kategori/ubahdata.php" method="post">
                <div class="form-group">
                    <label for="inputID">ID Kategori :</label>
                    <input class="form-control" type="text" name="inputID" value="<?php echo $result['id_kat']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputKeterangan" class="control-label">Keterangan :</label>
                    <input class="form-control" type="text" name="inputKeterangan" value="<?php echo $result['keterangan']; ?>" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Posisi Rak :</label>
                    <select class="form-control" name="inputRak">
                            <option selected value="<?php echo $result['id_rak']; ?>"><?php echo $result['id_rak']; ?></option>
                        <?php while($r = $rak->fetch_array()) : ?>
                            <option value="<?php echo $r['id_rak']; ?>"><?php echo $r['id_rak']; ?> - <?php echo $r['posisi_rak']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan">Simpan</button>
                    <button type="submit" name="">Bersihkan</button>
                </div>
            </form>
        </div>
<?php
    } else {
        $rak = $koneksi->query("SELECT * FROM rak");
?>
        <div class="">
            <h2>FORM PENAMBAHAN KATEGORI</h2>
            <hr>
            <form class="" action="view/kategori/tambahdata.php" method="POST">
                <div class="form-group">
                    <label for="inputID" class="control-label">ID Kategori :</label>
                    <input class="form-control" type="text" name="inputID" value="">
                </div>
                <div class="form-group">
                    <label for="inputKeterangan">Keterangan :</label>
                    <input class="form-control" type="text" name="inputKeterangan" value="">
                </div>
                <div class="form-group">
                    <label for="inputRak">Kode Rak :</label>
                    <select class="form-control" name="inputRak">
                        <?php while($r = $rak->fetch_array()) : ?>
                            <option value="<?php echo $r['id_rak']; ?>"><?php echo $r['id_rak']; ?> - <?php echo $r['posisi_rak']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan">Simpan</button>
                    <button type="reset" name="">Bersihkan</button>
                </div>
            </form>
        </div>
<?php } ?>
