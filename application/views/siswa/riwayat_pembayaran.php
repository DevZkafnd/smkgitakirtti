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
                <table id="tabelRiwayatPembayaran" class="table table-striped dt-responsive">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Jumlah Pembayaran</th>
                            <th class="text-center">Metode Pembayaran</th>
                            <th class="text-center">Bank</th>
                            <th class="text-center">Waktu Transaksi</th>
                            <th class="text-center">Status</th>
                            <!-- <th class="text-center">Aksi</th> -->
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody class="text-center">
                        <!-- start row -->
                        <?php
                        $no = 1;
                        foreach ($riwayat as $d) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="text-center"><?php echo $d->order_id; ?></td>
                                <td class="text-center"><?php echo $d->nama; ?></td>
                                <td class="text-center"><?php echo $d->gross_amount; ?></td>
                                <td>
                                    <?php
                                    if ($d->payment_type == "cstore") {
                                        ?>
                                        <span>Convenience Store</span>
                                        <?php
                                    } elseif ($d->payment_type == "bank_transfer") {
                                        ?>
                                        <span>Bank Transfer</span>
                                        <?php
                                    } elseif ($d->payment_type == "qris") {
                                        ?>
                                        <span>QRIS</span>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $d->bank; ?></td>
                                <td class="text-center"><?php echo $d->transaction_time; ?></td>
                                <td>
                                    <?php
                                    if ($d->status_code == "200") {
                                        ?>
                                        <span class="badge bg-success">Success</span>
                                        <?php
                                    } else {
                                        ?>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <!-- <td>
                                <a href="<?= base_url('siswa/riwayat_pembayaran/cetak_invoice/') . $d->order_id ?>"
                                    class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Invoice">Download</a>
                            </td> -->
                            </tr>
                        <?php } ?>
                        <!-- end row -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    <!-- / Content -->