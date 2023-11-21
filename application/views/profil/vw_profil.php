<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></>
    <p></p>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/') . $user['gambar']; ?>"class="card-img">
                </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><?= $user['nama']; ?></h3>
                    <p class="card-text" style="font-size: 14px;"><?= $user['email']; ?></p>
                    <p class="card-text" style="font-size: 12px; color: #888;">Anggota sejak <?= date('d F Y', $user['date_created']); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>