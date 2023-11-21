<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title fw-semibold mb-4">
                <?php echo $judul; ?>
            </h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Ubah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?= $prodi['nama']; ?>"
                                            class="form-control" id="nama" placeholder="Nama">
                                            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="ruang">Ruangan</label>
                                        <input type="text" name="ruang" value="<?= $prodi['ruang']; ?>"
                                            class="form-control" id="ruang" placeholder="Ruangan">
                                            <?= form_error('ruang', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="jurusan">Jurusan</label>
                                        <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>"
                                            class="form-control" id="jurusan" placeholder="jurusan">
                                            <?= form_error('jurusan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="akreditasi">akreditasi</label>
                                        <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>"
                                            class="form-control" id="akreditasi" placeholder="akreditasi">
                                            <?= form_error('akreditasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nama_kaprodi">Nama Kaprodi</label>
                                        <input type="nama_kaprodi" name="nama_kaprodi"
                                            value="<?= $prodi['nama_kaprodi']; ?>" class="form-control"
                                            id="nama_kaprodi" placeholder="Nama Kaprodi">
                                            <?= form_error('nama_kaprodi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="tahun_berdiri">Tahun Berdiri</label>
                                        <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                            class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                                            <?= form_error('tahun_berdiri', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="output_lulusan">Output Lulusan</label>
                                        <input type="text" name="output_lulusan"
                                            value="<?= $prodi['output_lulusan']; ?>" class="form-control"
                                            id="output_lulusan" placeholder="Output Lulusan">
                                            <?= form_error('output_lulusan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <img src="<?= base_url('assets/') . $prodi['gambar']; ?>" style="width: 100px" class="img-thumbnail">
                                        <label for="gambar">gambar</label>
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                            <label for="gambar" class="custom-file-label">choose file</label>
                                        </div>
                                    </div>


                                    <a href="<?= base_url('index.php/Prodi') ?> " class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data
                                        Prodi</button>
                                </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>