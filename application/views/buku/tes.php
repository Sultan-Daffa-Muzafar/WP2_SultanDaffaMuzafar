<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h3><?= $judul; ?></h3>
    <div class="row">
        <div class="col-lg-6">

            <?= form_open_multipart('Buku/ubahBuku' . $buku['id']); ?>


            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku['judul_buku']; ?>">
            </div>

            <div class="form-group">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang']; ?>">
            </div>
            <div class="form-group">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit']; ?>">
            </div>
            <div class="form-group">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>">
            </div>
            <div class="form-group">
                <label for="isbn" class="form-label">Nomor ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku['isbn']; ?>">
            </div>
            <div class="form-group">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?= $buku['stok']; ?>">
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/upload/') . $buku['image']; ?>" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="customfile-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                <input type="submit" class="btn btn-primary col-lg-3 mt-3" value="Update">
            </div>

            <?php form_close(); ?>


        </div>
    </div>
</div>
</div>