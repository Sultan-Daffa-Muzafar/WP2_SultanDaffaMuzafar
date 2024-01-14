<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Kategori tidak boleh kosong</div>');
                redirect('buku/ubahKategori/' . $k->id_kategori);
            } ?>
            <?php foreach ($kategori as $k) { ?>
                <form action="<?php echo base_url('buku/ubahKategori'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $k['id_kategori']; ?>">
                        <input type="text" name="nama_kategori" id="nama_kategori" value="<?php echo $k['nama_kategori']; ?>" class="form-control form-control-user" placeholder="Masukan Kategori Buku">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update" placeholder="Masukan Kategori Buku">
                    </div>
                </form>
            <?php  } ?>
        </div>
    </div>
</div>