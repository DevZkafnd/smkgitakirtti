<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <div class="d-flex">
            <a class="bg-primary text-white rounded py-2 px-3 mb-4"
                href="<?= base_url('admin/data_pelapor/tambah_data_pelapor') ?>">
                <i class="ti ti-plus"></i>
                Tambah Pelapor
            </a>
        </div> -->

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive my-2 mx-3">
                <table id="tabelRiwayatPembayaranSiswa" class="table table-striped dt-responsive" style="width:100%">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Jumlah Pembayaran</th>
                            <th class="text-center">Metode Pembayaran</th>
                            <th class="text-center">Bank</th>
                            <th class="text-center">Waktu Transaksi</th>
                            <th class="text-center">Status</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($semua_transaksi as $t): ?>
                            <tr class="text-center">
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $t->order_id ?></td>
                                <td><?= $t->nama ?></td>
                                <td><?php echo $t->email; ?></td>
                                <td><?php echo format_rupiah($t->gross_amount); ?></td>
                                <td>
                                    <?php
                                    if ($t->payment_type == "cstore") {
                                        ?>
                                        <span>Convenience Store</span>
                                        <?php
                                    } elseif ($t->payment_type == "bank_transfer") {
                                        ?>
                                        <span>Bank Transfer</span>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $t->bank; ?></td>
                                <td><?php echo Indonesia2Tgl($t->transaction_time); ?></td>
                                <td>
                                    <?php
                                    if ($t->status_code == "200") {
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
    <!--/ Basic Bootstrap Table -->
    <!-- / Content -->