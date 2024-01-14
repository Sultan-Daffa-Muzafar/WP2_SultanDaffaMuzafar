<div class="container-fluid">
    <?= $this->session->flashdata('tambah'); ?>
    <?= $this->session->flashdata('hapus'); ?>
    <div class="row">
        <div class="col-lg-3">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i> Tambah Kategori</button>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Pilihan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($kategori as $k) : ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <th><?= $k['nama_kategori']; ?></th>
                            <td>
                                <a href="<?= base_url('buku/ubahkategori/') . $k['id_kategori']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('buku/hapusKategori/') . $k['id_kategori']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['nama_kategori']; ?>?')" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= form_open('buku/kategori'); ?>

                <div class="form-group">
                    <label for="nama_kategori">Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" placeholder="" name="nama_kategori">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>




                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>