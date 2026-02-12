<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK GITA KIRTTI 1 JAKARTA</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css') ?> " rel="stylesheet">
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?> " rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/ratify-upload.css') ?>" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- Ekko Lightbox -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="<?= base_url('user/dashboard') ?>" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-warning"><img class="img-fluid me-2" src="<?= base_url('assets/img/logo.png') ?>" alt=""
                    style="width: 40px;">SMK GITA KIRTTI 1 JAKARTA</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="<?= base_url('user/dashboard') ?>" class="nav-item nav-link">Home</a>
                <a href="<?= base_url('user/tentang_kami') ?>" class="nav-item nav-link">Tentang Kami</a>
                <a href="<?= base_url('user/gallery') ?>" class="nav-item nav-link">Gallery</a>
                <!-- <a href="<?= base_url('ppdb') ?>" class="nav-item nav-link">PPDB</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PPDB</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="feature.html" class="dropdown-item">Alur Pendaftaran</a>
                        <a href="token.html" class="dropdown-item">Syarat & Berkas Pendaftaran</a>
                        <a href="<?= base_url('ppdb') ?>" class="dropdown-item">Formulir PPDB</a>
                    </div>
                </div> -->
                <a href="<?= base_url('user/kontak') ?>" class="nav-item nav-link">Kontak</a>
                <div class="d-lg-inline-flex align-items-center">
                    <a class="btn btn-primary py-2 px-4" href="<?= base_url('auth') ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->