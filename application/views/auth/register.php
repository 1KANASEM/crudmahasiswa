<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?= base_url('index.php/auth/regis') ?>">
                        <div class="row mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="nama" type="text" name="nama"
                                    placeholder="Enter your name" />
                                <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                <label for="nama">name</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email"
                                placeholder="name@example.com" />
                            <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="password" type="password" name="password"
                                placeholder="Create a password" />
                            <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <label for="password">Password</label>
                        </div>

                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="password" type="password" name="password2"
                                placeholder="Confirm password" />
                            <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <label for="password">Password</label>
                        </div>

                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-user btn-block">Buat
                                    akun</button></div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?= base_url('index.php/auth') ?>">Sudah Punya Akun? LOGIN LAA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>