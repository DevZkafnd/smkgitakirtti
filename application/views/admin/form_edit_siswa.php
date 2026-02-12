<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_siswa/edit_data_siswa_simpan') ?>" method="POST"
                        autocomplete="off">
                        <input type="hidden" name="id_user" value="<?= $siswa->id_user ?>">
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nomor Induk Kependudukan</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="basic-icon-default-fullname" name="nik"
                                    value="<?= $siswa->nik ?>" aria-label="Nomor Induk Kependudukan"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nomor Induk Siswa</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="basic-icon-default-fullname" name="nis"
                                    value="<?= $siswa->nis ?>" aria-label="Nomor Induk Kependudukan"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="nama"
                                    value="<?= $siswa->nama ?>" aria-label="Nama Lengkap"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="email" class="form-control" id="basic-icon-default-fullname" name="email"
                                    value="<?= $siswa->email ?>" aria-label="Email"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp" value="<?= $siswa->no_telp ?>" aria-label="No Telepon"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="jenis_kelamin"
                                aria-label="Default select example">
                                <option value="Laki-Laki" <?= ($siswa->jenis_kelamin == 'Laki-Laki') ? 'selected' : '' ?>>
                                    Laki-Laki</option>
                                <option value="Perempuan" <?= ($siswa->jenis_kelamin == 'Perempuan') ? 'selected' : '' ?>>
                                    Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Tanggal Lahir</label>
                            <div class="input-group input-group-merge">
                                <input type="date" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="tgl_lahir" value="<?= $siswa->tgl_lahir ?>" aria-label="Tanggal Lahir"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <!-- Provinsi -->
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="form-control">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>

                        <!-- Kabupaten -->
                        <div class="mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                            <select name="kabupaten" id="kabupaten" class="form-control">
                                <option value="">Pilih Kabupaten</option>
                            </select>
                        </div>

                        <!-- Kecamatan -->
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" class="form-control">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>

                        <!-- Kelurahan -->
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <select name="kelurahan" id="kelurahan" class="form-control">
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>

                        <!-- Hidden input untuk menyimpan nilai lama dari database -->
                        <input type="hidden" id="provinsi_lama" value="<?= $siswa->provinsi ?>">
                        <input type="hidden" id="kabupaten_lama" value="<?= $siswa->kabupaten ?>">
                        <input type="hidden" id="kecamatan_lama" value="<?= $siswa->kecamatan ?>">
                        <input type="hidden" id="kelurahan_lama" value="<?= $siswa->kelurahan ?>">

                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Ayah</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    name="nama_ayah" value="<?= $siswa->nama_ayah ?>" aria-label="Nama Ayah"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Ibu</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="nama_ibu"
                                    value="<?= $siswa->nama_ibu ?>" aria-label="Nama Ibu"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Wali</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    name="nama_wali" value="<?= $siswa->nama_wali ?>" aria-label="Nama Wali"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                            <small>* Kosongkan jika tidak ada.</small>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon Ortu / Wali</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp_ortu" value="<?= $siswa->no_telp_ortu ?>"
                                    aria-label="No Telepon Ortu / Wali" aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Sekolah Asal</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="sekolah_asal" value="<?= $siswa->sekolah_asal ?>" aria-label="Sekolah Asal"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="id_kelas"
                                aria-label="Default select example">
                                <?php foreach ($kelas_list as $kelas): ?>
                                    <option value="<?= $kelas->id ?>" <?= ($siswa->id_kelas == $kelas->id) ? 'selected' : '' ?>>
                                        <?= $kelas->nama_kelas ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="id_jurusan"
                                aria-label="Default select example">
                                <?php foreach ($jurusan_list as $jurusan): ?>
                                    <option value="<?= $jurusan->id_jurusan ?>"
                                        <?= ($siswa->id_jurusan == $jurusan->id_jurusan) ? 'selected' : '' ?>>
                                        <?= $jurusan->nama_jurusan ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Tahun Lulus</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="thn_lulus" value="<?= $siswa->thn_lulus ?>" aria-label="Tahun Lulus"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <?php
                        $penghasilan_options = [
                            '< < Rp. 1.000.000',
                            'Rp. 1.000.000 - Rp. 2.000.000',
                            'Rp. 2.000.000 - Rp. 3.000.000',
                            'Rp. 3.000.000 - Rp. 4.000.000',
                            'Rp. 4.000.000 - Rp. 5.000.000',
                            'Rp. 5.000.000 > >'
                        ];
                        ?>

                        <div class="mb-2">
                            <label class="form-label" for="penghasilan_ortu">Penghasilan Ortu / Wali</label>
                            <div class="input-group input-group-merge">
                                <select name="penghasilan_ortu" class="form-select" id="penghasilan_ortu">
                                    <?php foreach ($penghasilan_options as $option): ?>
                                        <option value="<?= $option ?>" <?= $siswa->penghasilan_ortu == $option ? 'selected' : '' ?>>
                                            <?= $option ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="basic-icon-default-message">Alamat</label>
                            <div class="input-group input-group-merge">
                                <textarea id="basic-icon-default-message" class="form-control"
                                    aria-label="Alamat Lengkap" aria-describedby="basic-icon-default-message2" rows="3"
                                    cols="50" name="alamat"><?= $siswa->alamat ?></textarea>
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