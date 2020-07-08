<div class="container">
    <?php if( $this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Barang apa yang ingin kamu cari ?..." name="keywoard" >
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </div>

        </div>
    
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Barang</h3>
            <?php if( empty($barang) ) : ?>
                <div class="alert alert-danger" role="alert">
                    data barang tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $barang as $brg ) : ?>
                    <li class="list-group-item">
                        <?= $brg['nama_barang']; ?>
                        <a href="<?= base_url(); ?>barang/hapus/<?= $brg ['id_barang']; ?>"class="badge badge-danger float-right" onclick="return confrim('yakin?');">hapus</a>
                        <a href="<?= base_url(); ?>barang/ubah/<?= $brg ['id_barang']; ?>"class="badge badge-success float-right" >ubah</a>
                        <a href="<?= base_url(); ?>barang/detail/<?= $brg ['id_barang']; ?>"class="badge badge-primary float-right" >detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>