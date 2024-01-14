<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('buku/ubahbuku/' . $buku->id); ?>
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $buku->id; ?>">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku->judul_buku; ?>">
            </div>

            <div class="form-group">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" class="form-control form-control-user">
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= $k['id_kategori'] == $buku->id_kategori ? 'selected' : ''; ?>>
                            <?= $k['nama_kategori']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <div class="form-group">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku->pengarang; ?>">
            </div>

            <div class="form-group">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku->penerbit; ?>">
            </div>

            <div class="form-group">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="">
                    <select name="tahun" class="form-control form-control-user">
                        <option value="">Pilih Tahun</option>
                        <?php for ($i = date('Y'); $i > 1000; $i--) : ?>
                            <option value="<?= $i; ?>" <?= $i == $buku->tahun_terbit ? 'selected' : ''; ?>><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
                <div class="">
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku->isbn; ?>">
                    <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>


            <div class="form-group">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?= $buku->stok; ?>">
                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/upload/') . $buku->image; ?>" class="img-thumbnail" alt="">
                        </div>

                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih file</label>
                                <input type="hidden" name="old_pict" value="<?= $buku->image; ?>">
                            </div>
                        </div>
                    </div>
                    <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group ">
                <a href="<?= base_url('buku'); ?>"><input type="button" class="btn btn-dark col-lg-3 mt-3" value="Kembali"></a>
                <input type="submit" class="btn btn-primary col-lg-3 mt-3" value="Update">
            </div>
        </div>
    </div>
</div>
</div>