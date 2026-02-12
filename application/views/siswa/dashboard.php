<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-2 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-bold d-block mb-0">Halo, Selamat Datang!</span>
                                <h7 class="card-title fw-normal text-primary mb-0"><?= $user->nama; ?></h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-book"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Nomor Induk Siswa</span>
                                <h3 class="card-title"><?= $user->nis; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-building"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Kelas</span>
                                <h3 class="card-title"><?= $user->nama_kelas; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-bookmarks"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Jurusan</span>
                                <h3 class="card-title"><?= $user->nama_jurusan; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->