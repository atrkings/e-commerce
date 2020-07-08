<div class="container">

    <div class="row at=3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Barang
            </div>
            <div class="card-body">
                <form action="" method = "post">
                    <div class="form-group">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" class="form-control" id="Id_Barang" name="id_barang"
                        placeholder="contoh : B005">
                        <small class="form-text text-danger"><?= form_error('id_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label>
                        <input type="text" class="form-control" id="Nama_Barang" name="nama_barang"
                        placeholder="">
                        <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="Jenis_Barang">Jenis Barang</label>
                        <select class="form-control" id="jenis_barang" 
                        name="jenis_barang">
                            <option>-----SELECT-----</option>
                            <option value="Input Device">Input Device</option>
                            <option value="Proces Device">Proces Device</option>
                            <option value="Output Device">Output Device</option>
                            <option value="Storage Unit">Storage Unit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jumlah_Barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="Jumlah_Barang" name="jumlah_barang" 
                        placeholder="">
                        <small class="form-text text-danger"><?= form_error('jumlah_barang'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>



        </div>
    </div>

</div>