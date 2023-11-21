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
                            Form Tambah Data Relawan
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
                                    <label for="nik">nik</label>
                                    <input type="text" name="nik" value="<?= set_value('nik') ?>"
                                        class="form-control" id="nik" placeholder="nik">
                                    <?= form_error('nik', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" value="<?= set_value('email') ?>"
                                            class="form-control" id="email" placeholder="email">
                                        <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="umur">umur</label>
                                    <input type="text" name="umur" value="<?= set_value('umur') ?>"
                                        class="form-control" id="umur" placeholder="umur">
                                    <?= form_error('umur', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
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
                                    <label for="alamat">alamat</label>
                                    <input type="text" name="alamat" value="<?= set_value('alamat') ?>"
                                        class="form-control" id="alamat" placeholder="alamat">
                                    <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">no hp</label>
                                    <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>"
                                        class="form-control" id="no_hp" placeholder="no hp">
                                    <?= form_error('no_hp', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                </div>

                                <a href="<?= base_url('index.php/') ?>Relawan/" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Relawan</button>
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