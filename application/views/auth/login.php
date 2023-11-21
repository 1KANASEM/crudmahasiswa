<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <h3 class="text-center font-weight-light my-4"> Halaman Login</h3>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">
                    <form class="user" method="post" action="<?= base_url('index.php/auth'); ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email"
                                placeholder="name@example.com" />
                            <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" type="password" name="password"
                                placeholder="Password" />
                            <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <label for="password">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                            <label class="form-check-label" for="inputRememberPassword">Remember
                                Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">Forgot Password?</a>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?= base_url('index.php/auth/regis') ?>">Belum Punya akun Y? MAKANYA
                            BUAT!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>