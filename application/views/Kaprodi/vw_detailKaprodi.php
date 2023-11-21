<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="card">
        <div class="card-header">
        Detail Prodi
        </div>
        <h2 class="Card-tittle">
            
                     <img src="<?= base_url('assets/') . $prodi['gambar']; ?>" style="width: 100px" class="img-thumbnail">
                                       

                        <?= $prodi['nama']; ?>
                    </h2>
                    
                    <div class="row">
                        <div class="col-md-4">Nama Kaprodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['nama_kaprodi']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">ruangan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['ruang']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">jurusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['jurusan']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">akreditasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['akreditasi']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">tahun berdiri</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['tahun_berdiri']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">output lulusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $prodi['output_lulusan']; ?>
                        </div>
                    </div>
                
            <div class="card-footer justify-content-center">
            <a href="<?= base_url('index.php/prodi') ?>" class="badge bg-danger">Tutup</a>
        </div>
    </div>
</div>