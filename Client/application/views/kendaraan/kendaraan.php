<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>kendaraan/tambah" class="btn btn-primary">Tambah Data Mobil</a>
        </div>
    </div> <br>
        <div class="card">
        <div class="card-header">
        <h3>Data Mobil</h3>
                </div>
        <div class="card-body">
            <?php if (empty($kendaraan)) : ?>
                <div class="alert alert-danger" role="alert">
                data kendaraan tidak ditemukan.
                </div>
            <?php endif; ?>
  <div class="table-responsive-sm">
  <table id="example1" class="table-active table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAMA</th>
      <th>PLAT</th>
      <th>HARGA</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($kendaraan as $knd) : ?>
    <tr>
      <td><?= $knd['id']; ?></td>
      <td><?= $knd['nama']; ?></td>
      <td><?= $knd['plat']; ?></td>
      <td><?= $knd['harga']; ?></td>
      <td>
      <a href="<?= base_url(); ?>kendaraan/detail/<?= $knd['id']; ?>"
                        class="badge badge-primary">Detail</a>  
      <a href="<?= base_url(); ?>kendaraan/ubah/<?= $knd['id']; ?>"
                        class="badge badge-success">Edit</a>
      <a href="<?= base_url(); ?>kendaraan/hapus/<?= $knd['id']; ?>"
                        class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>    
  </table>
  </div>
  </div>
  </div>

    