<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex">
            <a class="bg-primary text-white rounded py-2 px-3 mb-4"
                href="<?= base_url('admin/data_admin/tambah_data_admin') ?>">
                <i class="ti ti-plus"></i>
                Tambah Admin
            </a>
        </div>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive my-2 mx-3">
                <table id="tabelAdmin" class="table table-striped dt-responsive nowrap" style="width:100%">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">No Telepon</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <!-- start row -->
                        <?php $no = 1; ?>
                        <?php foreach ($data_user as $du): ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td class="text-center"><?php echo $du->nik ?></td>
                                <td class="text-center"><?php echo $du->nama ?></td>
                                <td class="text-center"><?php echo $du->email ?></td>
                                <td class="text-center"><?php echo $du->jenis_kelamin ?></td>
                                <td class="text-center"><?php echo $du->no_telp ?></td>
                                <td class="text-center"><?php echo $du->alamat ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/data_admin/edit_data_admin/') . $du->id_user ?>"
                                        class="btn-aksi btn btn-warning"><i class="tf-icons bx bx-edit"></i></a>
                                    <a href="<?= base_url('admin/data_admin/hapus_data_admin/') . $du->id_user ?>"
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