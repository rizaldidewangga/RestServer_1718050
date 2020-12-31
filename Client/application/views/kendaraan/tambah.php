<div class="container">

    <br>
            <div class="card mb3">
                <div class="card-header">
                    Form Tambah Data Mobil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" class="form-control" id="id">
                            <small class="form-text text-danger"><?= form_error('id'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="plat">Plat</label>
                            <input type="text" name="plat" class="form-control" id="plat">
                            <small class="form-text text-danger"><?= form_error('plat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>