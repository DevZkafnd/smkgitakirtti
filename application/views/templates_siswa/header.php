<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= base_url('assets/assets/') ?> " data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $title; ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?> " />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/fonts/boxicons.css') ?> " />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tabler-icons@1.35.0/iconfont/tabler-icons.min.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/css/core.css') ?> "
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/css/theme-default.css') ?> "
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?> " />
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/libs/apex-charts/apex-charts.css') ?> " />

    <!-- Helpers -->
    <script src="<?= base_url('assets/assets/vendor/js/helpers.js') ?> "></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/assets/js/config.js') ?> "></script>

    <link href='https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css' rel='stylesheet' />
    <link href='https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css' rel='stylesheet' />
    <link href='https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.3/css/buttons.dataTables.css">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <span class="d-flex align-items-center justify-content-center">
                                    <h5 class="fw-semibold mb-0"><?php echo $title; ?></h5>
                                </span>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?= base_url('assets/assets/img/avatars/1.png') ?> " alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?= base_url('assets/assets/img/avatars/1.png') ?> "
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block"><?= $this->session->userdata('nama'); ?></span>
                                                    <small
                                                        class="text-muted"><?= getRole($this->session->userdata('level')); ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('siswa/riwayat_pembayaran') ?>">
                                            <i class="bx bx-history me-2"></i>
                                            <span class="align-middle">Riwayat Pembayaran</span>
                                        </a>
                                        <a class="dropdown-item" href="<?= base_url('auth/ganti_password') ?>">
                                            <i class="bx bx-lock me-2"></i>
                                            <span class="align-middle">Ganti Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->