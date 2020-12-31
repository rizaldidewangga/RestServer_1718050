<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mobil
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $kendaraan['id']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $kendaraan['nama']; ?></h6>
                    <p class="card-text"><?= $kendaraan['plat']; ?></p>
                    <p class="card-text"><?= $kendaraan['harga']; ?></p>
                    <a href="<?= base_url(); ?>kendaraan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>