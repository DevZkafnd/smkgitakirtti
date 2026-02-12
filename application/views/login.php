<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= base_url('assets/assets/') ?>" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $title; ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/fonts/boxicons.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/css/core.css') ?>"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/css/theme-default.css') ?>"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/css/pages/page-auth.css') ?>" />
    <!-- Helpers -->
    <script src="<?= base_url('assets/assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/assets/js/config.js') ?>"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a class="app-brand-link">
                                <img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="100">
                                <!-- <span class="app-brand-text-login demo text-body">Login</span> -->
                            </a>
                        </div>

                        <form method="POST" action="<?= base_url('auth/process') ?>" id="formAuthentication"
                            autocomplete="off" class="mb-3" novalidate="">
                            <!-- Keluar -->
                            <?= $this->session->flashdata('pesan'); ?>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <label for="email" class="form-label">Email</label>
                                </div>
                                <input type="text" name="email"
                                    class="form-control <?= $this->session->flashdata('error_email') ? 'is-invalid' : '' ?>"
                                    value="<?= $this->session->flashdata('old_email'); ?>" placeholder="Email">
                                <small class="text-danger"><?= form_error('email') ?></small>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="input-group-text fa fa-eye-slash" id="hide"></span>
                                </div>
                                <small class="text-danger"><?= form_error('password') ?></small>
                            </div>
                            <div class="mt-5">
                                <button name="login" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <script>
        setTimeout(function () {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.remove('show'); // Ini akan benar-benar menghapus elemen dari DOM
                alert.classList.add('fade');
            }
        }, 3000); // 2 detik

        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
        };

        const triggerPassword = document.querySelector('.fa-eye-slash');

        const showPassword = trigger => {
            trigger.addEventListener('click', () => {
                if (trigger.previousElementSibling.getAttribute('type') === 'password') {
                    trigger.previousElementSibling.setAttribute('type', 'text');
                    trigger.classList.remove('fa-eye-slash');
                    trigger.classList.add('fa-eye');
                } else if (trigger.previousElementSibling.getAttribute('type') === 'text') {
                    trigger.previousElementSibling.setAttribute('type', 'password');
                    trigger.classList.remove('fa-eye');
                    trigger.classList.add('fa-eye-slash');
                }
            });
        }

        showPassword(triggerPassword);
    </script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

    <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>