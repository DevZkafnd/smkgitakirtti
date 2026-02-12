<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex">
            <a class="bg-primary text-white rounded py-2 px-3 mb-4"
                href="<?= base_url('admin/data_jadwal/tambah_data_jadwal') ?>">
                <i class="ti ti-plus"></i>
                Tambah Jadwal
            </a>
        </div>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive my-2 mx-3">
                <table id="tabelJadwal" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Hari</th>
                            <th class="text-center">Jam</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Mata Pelajaran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jadwal as $j): ?>
                            <tr>
                                <td class="text-center"><?= $j->hari ?></td>
                                <td class="text-center"><?= $j->jam_mulai ?> - <?= $j->jam_selesai ?></td>
                                <td class="text-center"><?= $j->nama_kelas ?></td>
                                <td class="text-center"><?= $j->nama_jurusan ?></td>
                                <td class="text-center"><?= $j->nama_mapel ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/data_jadwal/edit_data_jadwal/') . $j->id ?>"
                                        class="btn-aksi btn btn-warning"><i class="tf-icons bx bx-edit"></i></a>
                                    <a href="<?= base_url('admin/data_jadwal/hapus_data_jadwal/') . $j->id ?>"
                                        class="btn-aksi btn btn-danger"><i class="tf-icons bx bx-trash"></i></a>
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