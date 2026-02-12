<header class="sub-header text-white">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url('user/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Kontak</li>
        </ol>
    </nav>
    <p>KONTAK</p>
</header>

<section class="container-fluid wow fadeInUp">
    <h1 class="text-center text-primary py-5">Kontak Kami</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Alamat</h2>
                                    <span>Jalan BRI Radio Dalam No. 34</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Telepon</h2>
                                    <span>0217231563</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Email</h2>
                                    <span>staff@smkgiki1.sch.id</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-page-form">
                    <form action="<?= base_url('user/kontak/tambah_pesan_simpan') ?>" method="post" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="single-input-field">
                                    <input type="text" placeholder="Nama" name="nama" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-input-field">
                                    <input type="email" placeholder="Email" name="email" required />
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="single-input-field">
                                    <input type="text" placeholder="Subjek" name="subjek" required />
                                </div>
                            </div>
                            <div class="col-md-12 message-input">
                                <div class="single-input-field">
                                    <textarea placeholder="Pesan" name="pesan" required></textarea>
                                </div>
                            </div>
                            <div class="single-input-fieldsbtn d-flex justify-content-center">
                                <input type="submit" value="Kirim" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h1 class="text-center text-primary py-5">Lokasi</h1>
            <div class="contact-page-form">
                <iframe style="border: 0;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.15007589727!2d106.7920788!3d-6.2587883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57e60ab86f3cc842!2sSekolah%20Menengah%20Kejuruan%20Gita%20Kirtti!5e0!3m2!1sen!2sid!4v1571197138757!5m2!1sen!2sid"
                    width='100%' height="400px" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>