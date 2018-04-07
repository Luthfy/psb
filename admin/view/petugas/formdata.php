<?php

    if ($_GET['p'] == 'ubahpetugas') {

        $id     = $_GET['id'];
        $query  = $koneksi->query("SELECT * FROM petugas WHERE id_petugas = '$id'");
        $result = $query->fetch_array();

?>
        <div class="">
            <h2>FORM PEMBARUAN PETUGAS</h2>
            <hr>
            <form class="" action="view/petugas/ubahdata.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="hidden" name="inputID" value="<?php echo $result['id_petugas']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputName" class="control-label">Nama :</label>
                    <input class="form-control" type="text" name="inputName" value="<?php echo $result['nama_petugas']; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputJabatan">Jabatan :</label>
                    <input class="form-control" type="text" name="inputJabatan" value="<?php echo $result['jabatan_petugas']; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputAccessLevel">AccessLevel :</label>
                    <input class="form-control" type="text" name="inputAccessLevel" value="<?php echo $result['AccessLevel']; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputUsername">username :</label>
                    <input class="form-control" type="text" name="inputUsername" value="<?php echo $result['username']; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password :</label>
                    <input class="form-control" type="password" name="inputPassword" value="<?php echo $result['password']; ?>" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" name="" class="btn btn-default">Bersihkan</button>
                </div>
            </form>
        </div>
<?php
    } else {
?>
        <div class="">
            <h2>FORM PENDAFTARAN PETUGAS</h2>
            <hr>
            <form class="" action="view/petugas/tambahdata.php" method="post">
                <div class="form-group">
                    <label for="inputName" class="control-label">Nama :</label>
                    <input class="form-control" type="text" name="inputName" value="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputJabatan">Jabatan :</label>
                    <input class="form-control" type="text" name="inputJabatan" value="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputAccessLevel">AccessLevel :</label>
                    <input class="form-control" type="text" name="inputAccessLevel" value="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputUsername">username :</label>
                    <input class="form-control" type="text" name="inputUsername" value="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password :</label>
                    <input class="form-control" type="password" name="inputPassword" value="" placeholder="">
                </div>
                <div class="form-group">
                    <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" name="" class="btn btn-default">Bersihkan</button>
                </div>
            </form>
        </div>
<?php } ?>
