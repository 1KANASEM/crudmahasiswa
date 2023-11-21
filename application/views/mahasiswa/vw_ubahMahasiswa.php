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
                            Form Ubah Data Mahasiswa
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>"
                                            class="form-control" id="nama" placeholder="Nama">
                                        <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nik">NIM</label>
                                        <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>"
                                            class="form-control" id="nik" placeholder="NIM">
                                        <?= form_error('nim', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamain" class="form-control">
                                            <option value="Laki-Laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki") {
                                                echo "selected";
                                            } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                                echo "selected";
                                            } ?>>Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="<?= $mahasiswa['email']; ?>"
                                            class="form-control" id="email" placeholder="Email">
                                        <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="prodi">Prodi</label>
                                        <select name="prodi" id="menu_id" class="form-control">
                                            <?php foreach ($prodi as $p): ?>
                                                <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
                                                      echo "selected";
                                                  } ?>><?= $p['nama']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('prodi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah"
                                            value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control"
                                            id="asal_sekolah" placeholder="asal sekolah">
                                        <?= form_error('asal_sekolah', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>"
                                            class="form-control" id="no_hp" placeholder="No hp">
                                        <?= form_error('no_hp', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>"
                                            class="form-control" id="alamat" placeholder="alamat">
                                        <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <a href="<?= base_url('index.php/Mahasiswa') ?> " class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data
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