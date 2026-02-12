<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_admin/edit_data_admin_simpan') ?>" method="POST"
                        autocomplete="off">
                        <input type="hidden" name="id_user" value="<?= $admin->id_user ?>">
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nomor Induk Kependudukan</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="basic-icon-default-fullname" name="nik"
                                    value="<?= $admin->nik ?>" aria-label="Nomor Induk Kependudukan"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="nama"
                                    value="<?= $admin->nama ?>" aria-label="Nama Lengkap"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="email" class="form-control" id="basic-icon-default-fullname" name="email"
                                    value="<?= $admin->email ?>" aria-label="Email"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="jenis_kelamin"
                                aria-label="Default select example">
                                <option value="Laki-Laki" <?= ($admin->jenis_kelamin == 'Laki-Laki') ? 'selected' : '' ?>>
                                    Laki-Laki</option>
                                <option value="Perempuan" <?= ($admin->jenis_kelamin == 'Perempuan') ? 'selected' : '' ?>>
                                    Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp" value="<?= $admin->no_telp ?>" aria-label="No Telepon"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="basic-icon-default-message">Alamat</label>
                            <div class="input-group input-group-merge">
                                <textarea id="basic-icon-default-message" class="form-control"
                                    aria-label="Alamat Lengkap" aria-describedby="basic-icon-default-message2" rows="3"
                                    cols="50" name="alamat"><?= $admin->alamat ?></textarea>
                            </div>
                        </div>
                        <button type="submit" value="simpan" class="btn btn-icon btn-primary w-100">
                            <span class="tf-icons bx bx-save"></span>&nbsp;Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->