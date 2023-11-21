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
                            Form Ubah Data Relawan
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $relawan['id']; ?>">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?= $relawan['nama']; ?>"
                                            class="form-control" id="nama" placeholder="Nama">
                                            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nik">nik</label>
                                        <input type="text" name="nik" value="<?= $relawan['nik']; ?>"
                                            class="form-control" id="ruang" placeholder="nik">
                                            <?= form_error('nik', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="email">email</label>
                                        <input type="text" name="email" value="<?= $relawan['email']; ?>"
                                            class="form-control" id="email" placeholder="email">
                                            <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="umur">umur</label>
                                        <input type="text" name="umur" value="<?= $relawan['umur']; ?>"
                                            class="form-control" id="umur" placeholder="umur">
                                            <?= form_error('umur', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamain" class="form-control">
                                            <option value="Laki-Laki" <?php if ($relawan['jenis_kelamin'] == "Laki-Laki") {
                                                echo "selected";
                                            } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if ($relawan['jenis_kelamin'] == "Perempuan") {
                                                echo "selected";
                                            } ?>>Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="alamat">alamat</label>
                                        <input type="text" name="alamat" value="<?= $relawan['alamat']; ?>"
                                            class="form-control" id="alamat" placeholder="alamat">
                                            <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="no_hp">no hp</label>
                                        <input type="text" name="no_hp"
                                            value="<?= $relawan['no_hp']; ?>" class="form-control"
                                            id="no_hp" placeholder="no hp">
                                            <?= form_error('no_hp', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    </div>

                                    <a href="<?= base_url('index.php/Relawan') ?> " class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data
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