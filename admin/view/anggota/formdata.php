<?php

    if ($_GET['p'] == 'ubahanggota') {

        $id     = $_GET['id'];
        $query  = $koneksi->query("SELECT * FROM anggota WHERE id_anggota = '$id'");
        $result = $query->fetch_array();

?>
        <div class="">
            <h2>FORM PEMBARUAN ANGGOTA</h2>
            <hr>
            <form class="" action="view/anggota/ubahdata.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="hidden" name="inputID" value="<?php echo $result['id_anggota']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputName" class="control-label">Nama :</label>
                    <input class="form-control" type="text" name="inputName" value="<?php echo $result['nama']; ?>" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat :</label>
                    <input class="form-control" type="text" name="inputAlamat" value="<?php echo $result['alamat']; ?>" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                    <label for="inputAngkatan">Angkatan :</label>
                    <select class="form-control" name="inputAngkatan">
                            <option selected value="<?php echo $result['angkatan']; ?>"><?php echo $result['angkatan']; ?></option>
                        <?php for ($i=2012; $i < 2030 ; $i++) : ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
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
?>
        <div class="">
            <h2>FORM PENDAFTARAN ANGGOTA</h2>
            <hr>
            <form class="" action="view/anggota/tambahdata.php" method="post">
                <div class="form-group">
                    <label for="inputName" class="control-label">Nama :</label>
                    <input class="form-control" type="text" name="inputName" value="" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat :</label>
                    <input class="form-control" type="text" name="inputAlamat" value="" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                    <label for="inputAngkatan">Angkatan :</label>
                    <select class="form-control" name="inputAngkatan">
                        <?php for ($i=2012; $i < 2030 ; $i++) : ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" name="" class="btn btn-default">Bersihkan</button>
                </div>
            </form>
        </div>
<?php } ?>
