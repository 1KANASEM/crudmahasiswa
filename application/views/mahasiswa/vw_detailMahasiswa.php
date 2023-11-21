<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="card">
        <div class="card-header">
            Detail mahasiswa
        </div>
        <h2 class="Card-tittle">
                        <?= $mahasiswa['nama']; ?>
                    </h2>
                    <h6 class="card-subtittle mb-2 text-muted">
                        <?= $mahasiswa['email']; ?>
                    </h6>
                    <div class="row">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['nim']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['jenis_kelamin']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['prodi']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['asal_sekolah']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['no_hp']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['alamat']; ?>
                        </div>
                    </div>
        <div class="card-footer justify-content-center">
            <a href="<?= base_url('index.php/Mahasiswa') ?>" class="badge bg-danger">Tutup</a>
        </div>
    </div>
</div>