<?php

    if ($_GET['p'] == 'ubahbuku') {

        $id       = $_GET['id'];
        $query    = $koneksi->query("SELECT * FROM KatalogBuku WHERE No = '$id'");
        $result   = $query->fetch_array();
        $kategori = $koneksi->query("SELECT * FROM kategori");
?>
        <div class="">
            <h2>FORM PEMBARUAN BUKU</h2>
            <hr>
            <form class="" action="view/buku/ubahdata.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="hidden" name="inputID" value="<?php echo $result['No']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputJudul" class="control-label">Judul :</label>
                    <input class="form-control" type="text" name="inputJudul" value="<?php echo $result['judul']; ?>" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="inputPenulis">Penulis :</label>
                    <input class="form-control" type="text" name="inputPenulis" value="<?php echo $result['penulis']; ?>" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Kategori :</label>
                    <select class="form-control" name="inputKategori">
                            <option selected value="<?php echo $result['id_kat']; ?>"><?php echo $result['kategori']; ?></option>
                        <?php while($r = $kategori->fetch_array()) : ?>
                            <option value="<?php echo $r['id_kat']; ?>"><?php echo $r['keterangan']; ?></option>
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
        $kategori = $koneksi->query("SELECT * FROM kategori");
?>
        <div class="">
            <h2>FORM PENAMBAHAN BUKU</h2>
            <hr>
            <form class="" action="view/buku/tambahdata.php" method="POST">
                <div class="form-group">
                    <label for="inputJudul" class="control-label">Judul :</label>
                    <input class="form-control" type="text" name="inputJudul" value="">
                </div>
                <div class="form-group">
                    <label for="inputPenulis">Penulis :</label>
                    <input class="form-control" type="text" name="inputPenulis" value="">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Kategori :</label>
                    <select class="form-control" name="inputKategori">
                        <?php while($r = $kategori->fetch_array()) : ?>
                            <option value="<?php echo $r['id_kat']; ?>"><?php echo $r['keterangan']; ?></option>
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
