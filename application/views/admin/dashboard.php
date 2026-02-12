<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-users"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Total Siswa</span>
                                <h3 class="card-title"><?= $total_siswa ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-receipt"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Transaksi Bulan Ini</span>
                                <h3 class="card-title"><?= $total_transaksi_bulan_ini ?> Transaksi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatars">
                                        <i class="rounded ti ti-receipt"></i>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-2">Total Nominal Transaksi</span>
                                <h3 class="card-title"><?= format_rupiah($total_nominal_transaksi) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-4">
                        <div class="card" style="height: auto;">
                            <div class="table-responsive my-2 mx-3">
                                <a href="<?= base_url('admin/riwayat_transaksi') ?>">
                                    <div class="header-pengumuman d-flex justify-content-between">
                                        <h4 class="pengumuman mt-2 fw-bold">Transaksi Hari Ini</h4>
                                        <i class="p-icon mt-2 fs-3 ti ti-chevron-right"></i>
                                    </div>
                                </a>
                                <hr>
                                <table id="tabelTransaksiHariIni" class="table table-striped dt-responsive">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Order ID</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Jumlah Pembayaran</th>
                                            <th class="text-center">Metode Pembayaran</th>
                                            <th class="text-center">Waktu Transaksi</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($transaksi_hari_ini as $trx): ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td class="text-center"><?= $trx->order_id ?></td>
                                                <td class="text-center"><?= $trx->nama ?></td>
                                                <td class="text-center"><?= $trx->email ?></td>
                                                <td class="text-center"><?= format_rupiah($trx->gross_amount) ?></td>
                                                <td class="text-center">
                                                    <?php
                                                    if ($trx->payment_type == "cstore") {
                                                        ?>
                                                        <span>Convenience Store</span>
                                                        <?php
                                                    } elseif ($trx->payment_type == "bank_transfer") {
                                                        ?>
                                                        <span>Bank Transfer</span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <?= date('d-m-Y H:i', strtotime($trx->transaction_time)) ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    if ($trx->status_code == "200") {
                                                        ?>
                                                        <span class="badge bg-success">Success</span>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->