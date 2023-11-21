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
                            Form Tambah Data Mahasiswa
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control"
                                        id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" value="<?= set_value('nim') ?>" name="nim" class="form-control"
                                        id="nim" placeholder="NIM">
                                    <?= form_error('nim', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin"
                                        value="<?= set_value('jenis_kelamin') ?>" class="form-control">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?= set_value('email') ?>"
                                        class="form-control" id="email" placeholder="Email">
                                    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select name="prodi" id="prodi" value="<?= set_value('prodi') ?>"
                                        class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        <?php foreach ($prodi as $p): ?>
                                            <option value="<?= $p['id']; ?>">
                                                <?= $p['nama']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('prodi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="asal_sekolah">Asal sekolah</label>
                                    <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>"
                                        class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                    <?= form_error('asal_sekolah', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>"
                                        class="form-control" id="no_hp" placeholder="No HP">
                                    <?= form_error('no_hp', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" value="<?= set_value('alamat') ?>"
                                        class="form-control" id="alamat" placeholder="Alamat">
                                    <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <a href="<?= base_url('index.php/') ?>Mahasiswa/" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Mahasiswa</button>
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