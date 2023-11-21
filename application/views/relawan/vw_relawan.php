<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul ?>
    </h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url('index.php/Relawan/tambah') ?>" class="btn btn-info mb-2">Tambah
            </a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Nik</td>
                        <td>Email</td>
                        <td>Umur</td>
                        <td>Jenis Kelamin</td>
                        <td>alamat</td>
                        <td>No Hp </td>
                        <td>Action</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($relawan as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['nik']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <?= $us['umur']; ?>
                            </td>
                            <td>
                                <?= $us['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?= $us['alamat']; ?>
                            </td>
                            <td>
                                <?= $us['no_hp']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/') ?>Relawan/hapus/<?= $us['id'] ?>"
                                    class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/') ?>Relawan/edit/<?= $us['id'] ?>"
                                    class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>