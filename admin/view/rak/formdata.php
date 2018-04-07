<?php

    if ($_GET['p'] == 'ubahrak') {

        $id       = $_GET['id'];
        $query    = $koneksi->query("SELECT * FROM rak WHERE id_rak = '$id'");
        $result   = $query->fetch_array();
?>
        <div class="">
            <h2>FORM PEMBARUAN KATEGORI</h2>
            <hr>
            <form class="" action="view/rak/ubahdata.php" method="POST">
                <div class="form-group">
                    <label for="inputID" class="control-label">ID Rak :</label>
                    <input class="form-control" type="text" name="inputID" value="<?php echo $result['id_rak']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputLemari" class="control-label">Masukan Abjad/Simbol Lemari :</label>
                    <input class="form-control" type="text" name="inputLemari" value="<?php echo $result['lemari_rak']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputRak" class="control-label">Masukan Urutan/Simbol Rak :</label>
                    <input class="form-control" type="text" name="inputRak" value="<?php echo $result['posisi_rak']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan">Simpan</button>
                    <button type="reset" name="">Bersihkan</button>
                </div>
            </form>
        </div>
<?php
    } else {
?>
        <div class="">
            <h2>FORM PENAMBAHAN RAK</h2>
            <hr>
            <form class="" action="view/rak/tambahdata.php" method="POST">
                <div class="form-group">
                    <label for="inputID" class="control-label">ID Rak :</label>
                    <input class="form-control" type="text" name="inputID" value="">
                </div>
                <div class="form-group">
                    <label for="inputLemari" class="control-label">Masukan Abjad/Simbol Lemari :</label>
                    <input class="form-control" type="text" name="inputLemari" value="">
                </div>
                <div class="form-group">
                    <label for="inputRak" class="control-label">Masukan Urutan/Simbol Rak :</label>
                    <input class="form-control" type="text" name="inputRak" value="">
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan">Simpan</button>
                    <button type="reset" name="">Bersihkan</button>
                </div>
            </form>
        </div>
<?php } ?>
