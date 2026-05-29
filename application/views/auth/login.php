<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login — PT Maju Jaya</title>
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #4e73df 0%, #224abe 100%); }
        .login-card { border-radius: 1rem; }
        .login-header { background: linear-gradient(135deg, #4e73df 0%, #224abe 100%); border-radius: 1rem 1rem 0 0; }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height:100vh;">
        <div class="col-xl-5 col-lg-6 col-md-8">

            <div class="card o-hidden border-0 shadow-lg login-card">
                <div class="login-header p-4 text-center text-white">
                    <i class="fas fa-shipping-fast fa-3x mb-3"></i>
                    <h4 class="font-weight-bold mb-0">PT Maju Jaya</h4>
                    <p class="mb-0 text-white-50">Sales Order System</p>
                </div>
                <div class="card-body p-4">
                    <h5 class="text-center text-gray-900 mb-4">Silakan Login</h5>

                    <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <i class="fas fa-exclamation-circle mr-1"></i>
                        <?= $this->session->flashdata('error') ?>
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    </div>
                    <?php endif; ?>

                    <form action="<?= base_url('auth/login') ?>" method="post">
                        <div class="form-group">
                            <label for="username"><i class="fas fa-user fa-sm text-gray-400 mr-1"></i> Username</label>
                            <input type="text" class="form-control form-control-user" id="username"
                                   name="username" placeholder="Masukkan username" required autofocus
                                   value="<?= set_value('username') ?>">
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fas fa-lock fa-sm text-gray-400 mr-1"></i> Password</label>
                            <input type="password" class="form-control form-control-user" id="password"
                                   name="password" placeholder="Masukkan password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block btn-lg mt-3">
                            <i class="fas fa-sign-in-alt mr-2"></i> Login
                        </button>
                    </form>

                    <hr>
                    <div class="text-center small text-muted">
                      Bunaya Ardik Saputra : 1224160039
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
