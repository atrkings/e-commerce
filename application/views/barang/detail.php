<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Detail Data Barang
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $barang['id_barang']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $barang['nama_barang']; ?></h6>
                <p class="card-text"><?= $barang['jenis_barang']; ?></p>
                <p class="card-text"><?= $barang['jumlah_barang']; ?></p>
                <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
            </div>
            </div>

        </div>
    </div>
</div>