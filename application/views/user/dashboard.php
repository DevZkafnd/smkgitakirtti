<!-- Header Start -->
<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown text-primary">Pendaftaran Siswa Baru Tahun Ajaran
                    2024-2025</h1>
                <p class="animated slideInDown text-dark">Pembukaan masa pendaftaran online, Ayo segera daftarkan diri
                    anda dan
                    pastikan anda akan mendapatkan pendidikan yang unggul dan berkualitas disini.
                </p>
                <a href="<?= base_url('ppdb') ?>" class="btn btn-primary py-3 px-4 animated slideInDown">Daftar
                    Sekarang</a>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite float-end" style="animation-duration: 3s;"
                    src="<?= base_url('assets/img/hero-1.png') ?>" alt="" width="600">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="<?= base_url('assets/img/about-1.jpg') ?>" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6">Tentang Kami</h1>
                    <p class="py-2">SMK GITA KIRTTI 1 Jakarta berdiri pada tanggal 11 November Tahun 1991 di bawah
                        naungan
                        Yayasan Gita
                        Kirtti dengan SK Nomor 05010.A1/. SMK GITA KIRTTI 1 pada awalnya membuka tiga Kompetensi
                        Keahlian yaitu Akuntansi, Administrasi Perkantoran dan Pemasaran.
                    </p>
                    <a class="btn btn-primary py-3 px-4" href="<?= base_url('user/tentang_kami') ?>">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-light py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid mb-4" src="<?= base_url('assets/img/users.png') ?>" alt="">
                <h1 class="display-10" data-toggle="counter-up">300</h1>
                <p class="fs-5 text-primary mb-0">Total Siswa</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid mb-4" src="<?= base_url('assets/img/guru.png') ?>" alt="">
                <h1 class="display-10" data-toggle="counter-up">30</h1>
                <p class="fs-5 text-primary mb-0">Guru & Pegawai</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                <img class="img-fluid mb-4" src="<?= base_url('assets/img/class.png') ?>" alt="">
                <h1 class="display-10" data-toggle="counter-up">25</h1>
                <p class="fs-5 text-primary mb-0">Kelas</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Portfolio Start -->
<div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-6 mb-5">Gallery</h1>
    </div>

    <div class="row mt-3 mb-4 button-group filter-button-group wow fadeInUp">
        <div class="col d-flex justify-content-center" id="wrapper">
            <button type="button" data-filter="*" class="btn gallery-btn btn-active mx-2 rounded-pill">New</button>
            <button type="button" data-filter=".gallery" class="btn gallery-btn mx-2 rounded-pill">Gallery</button>
            <button type="button" data-filter=".gallery-1" class="btn gallery-btn mx-2 rounded-pill">Gallery
                1</button>
        </div>
    </div>

    <div class="row justify-content-center g-4 wow fadeInUp" id="product-list">
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
                    <img src="<?= base_url('assets/img/gallery/anbk.jpg') ?>" class="img-fluid d-block mx-auto pt-2">
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
<!-- Portfolio End -->


<!-- FAQs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">FAQs</h1>
            <p class="text-primary fs-5 mb-5">Pertanyaan dan Jawaban yang sering dilakukan.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Bagaimana Cara Melakukan Pembayaran SPP?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">-
                                <!-- Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam. -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana Cara Melakukan Pembayaran SPP?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you only create HTML websites?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Will my website be mobile-friendly?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Will you maintain my site for me?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                I’m on a strict budget. Do you have any low cost options?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Will you maintain my site for me?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                I’m on a strict budget. Do you have any low cost options?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->