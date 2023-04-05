<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login - Sistem Pemakaian Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sistem Pemakaian Lab</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?= base_url('assets/images/profile-img.png') ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('assets/images/smk.png') ?>" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('assets/images/smk.png') ?>" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form class="form-horizontal" action="<?= url_to('login') ?>" method="post">

                                    <div class="mb-3">
                                        <label for="username" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="username" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.password') ?></label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" aria-label="Password" name="password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit"><?=lang('Auth.loginAction')?></button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>© <script>
                                    document.write(new Date().getFullYear())
                                </script> SMK Ma'arif NU Tirto.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:15:00 GMT -->

</html>