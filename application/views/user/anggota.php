<div class="container-fluid">
  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-12">
      <hr>
      <div class="table-responsive">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Image</th>
              <th scope="col">Tanggal Bergabung</th>

            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($anggota as $g) { ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $g['nama']; ?></td>
                <td><?= $g['email']; ?></td>
                <td><img class="img-profile" width="75" src="<?= base_url('assets/img/profile/') . $g['image']; ?>"></td>
                <td><?= date('d F Y', $g['tanggal_input']); ?></td>

              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->