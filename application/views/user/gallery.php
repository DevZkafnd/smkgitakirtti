<header class="sub-header text-white">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url('user/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
        </ol>
    </nav>
    <p>GALLERY</p>
</header>

<section class="container wow fadeInUp">
    <h1 class="text-center text-primary py-5">Gallery</h1>
    <div class="container">

        <div class="row mt-3 mb-4 button-group filter-button-group">
            <div class="col d-flex justify-content-center">
                <button type="button" data-filter="*" class="btn gallery-btn btn-active mx-2 rounded-pill">New</button>
                <button type="button" data-filter=".gallery" class="btn gallery-btn mx-2 rounded-pill">Gallery</button>
                <button type="button" data-filter=".gallery-1" class="btn gallery-btn mx-2 rounded-pill">Gallery
                    1</button>
            </div>
        </div>

        <div class="row justify-content-center g-4" id="product-list">
            <div class="col-lg-4 col-md-6 gallery">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/pekan-ramadhan.jpg') ?>" class="product-img"
                        data-toggle="lightbox" data-gallery="gallery" data-max-width="600">
                        <img src="<?= base_url('assets/img/gallery/pekan-ramadhan.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">Pekan Ramadhan Tahun 2023</span>
                        <span class="d-block">Pekan Ramadhan Tahun 2023</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/anbk.jpg') ?>" class="product-img" data-toggle="lightbox"
                        data-gallery="gallery">
                        <img src="<?= base_url('assets/img/gallery/anbk.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">ANBK Tahun 2022</span>
                        <span class="d-block">Asesmen Nasional Berbasis Komputer Tahun 2022</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-1">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/peringatan-hut-ri.jpg') ?>" class="product-img"
                        data-toggle="lightbox" data-gallery="gallery">
                        <img src="<?= base_url('assets/img/gallery/peringatan-hut-ri.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">Peringatan HUT RI Tahun 2022</span>
                        <span class="d-block">Peringatan HUT RI Tahun 2022</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-1">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/hut-pramuka.jpg') ?>" class="product-img"
                        data-toggle="lightbox" data-gallery="gallery">
                        <img src="<?= base_url('assets/img/gallery/hut-pramuka.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">HUT Pramuka Tahun 2022</span>
                        <span class="d-block">HUT Pramuka Tahun 2022</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/tanggap-bencana-simprug.jpg') ?>" class="product-img"
                        data-toggle="lightbox" data-gallery="gallery">
                        <img src="<?= base_url('assets/img/gallery/tanggap-bencana-simprug.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">Tangap Bencana Simprug</span>
                        <span class="d-block">Tangap Bencana Simprug</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-1">
                <div class="product-item">
                    <a href="<?= base_url('assets/img/gallery/bina-kusuma-jaya.jpg') ?>" class="product-img"
                        data-toggle="lightbox" data-gallery="gallery">
                        <img src="<?= base_url('assets/img/gallery/bina-kusuma-jaya.jpg') ?>"
                            class="img-fluid d-block mx-auto pt-2">
                    </a>
                    <div class="product-content px-2 py-3">
                        <span class="d-block text-uppercase fw-bold text-dark">Bina Kusuma Jaya Tahun 2022</span>
                        <span class="d-block">Bina Kusuma Jaya Tahun 2022</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>