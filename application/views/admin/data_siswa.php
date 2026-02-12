<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex">
            <a class="bg-primary text-white rounded py-2 px-3 mb-4"
                href="<?= base_url('admin/data_siswa/tambah_data_siswa') ?>">
                <i class="ti ti-plus"></i>
                Tambah Siswa
            </a>
        </div>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive my-2 mx-3">
                <table id="tabelSiswa" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">NIS</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">No Telepon</th>
                            <th class="text-center">Foto Siswa</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <!-- start row -->
                        <?php
                        $no = 1;
                        foreach ($user as $us): ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td class="text-center"><?= $us->nik ?></td>
                                <td class="text-center"><?= $us->nis ?></td>
                                <td class="text-center"><?= $us->nama ?></td>
                                <td class="text-center"><?= $us->email ?></td>
                                <td class="text-center"><?= $us->nama_kelas ?></td>
                                <td class="text-center"><?= $us->nama_jurusan ?></td>
                                <td class="text-center"><?= $us->no_telp ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url() . 'assets/upload/user/' . $us->foto_siswa ?>" alt="user"
                                        width="70" height="70" />
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/data_siswa/edit_data_siswa/') . $us->id_user ?>"
                                        class="btn-aksi btn btn-warning"><i class="tf-icons bx bx-edit"></i></a>
                                    <a href="<?= base_url('admin/data_siswa/hapus_data_siswa/') . $us->id_user ?>"
                                        class="btn-aksi btn btn-danger"><i class="tf-icons bx bx-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- end row -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    <!-- / Content -->