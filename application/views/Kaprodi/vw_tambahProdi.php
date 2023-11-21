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
                            Form Tambah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control"
                                        id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ruang">Ruangan</label>
                                    <input type="text" name="ruang" value="<?= set_value('ruang') ?>"
                                        class="form-control" id="ruang" placeholder="Ruangan">
                                    <?= form_error('ruang', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="akreditasi">Jurusan</label>
                                        <input type="text" name="jurusan" value="<?= set_value('jurusan') ?>"
                                            class="form-control" id="jurusan" placeholder="jurusan">
                                        <?= form_error('jurusan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">akreditasi</label>
                                    <input type="text" name="akreditasi" value="<?= set_value('akreditasi') ?>"
                                        class="form-control" id="akreditasi" placeholder="akreditasi">
                                    <?= form_error('akreditasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kaprodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi') ?>"
                                        class="form-control" id="nama_kaprodi" placeholder="nama kaprodi">
                                    <?= form_error('nama_kaprodi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" value="<?= set_value('tahun_berdiri') ?>"
                                        class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                                    <?= form_error('tahun_berdiri', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" value="<?= set_value('output_lulusan') ?>"
                                        class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                                    <?= form_error('output_lulusan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">gambar</label>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar">

                                    </div>
                                </div>

                                <a href="<?= base_url('index.php/') ?>Prodi/" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
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