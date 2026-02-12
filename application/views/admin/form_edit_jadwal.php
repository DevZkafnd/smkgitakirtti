<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_jadwal/edit_data_jadwal_simpan') ?>" method="POST"
                        autocomplete="off">
                        <input type="hidden" name="id" value="<?= $jadwal->id ?>">
                        <div class="row mb-2">
                            <div class="col">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="id_kelas"
                                    aria-label="Default select example">
                                    <?php foreach ($kelas_list as $kelas): ?>
                                        <option value="<?= $kelas->id ?>" <?= ($jadwal->id_kelas == $kelas->id) ? 'selected' : '' ?>>
                                            <?= $kelas->nama_kelas ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                </select>
                            </div>
                            <div class="col">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="id_jurusan"
                                    aria-label="Default select example">
                                    <?php foreach ($jurusan_list as $jurusan): ?>
                                        <option value="<?= $jurusan->id_jurusan ?>"
                                            <?= ($jadwal->id_jurusan == $jurusan->id_jurusan) ? 'selected' : '' ?>>
                                            <?= $jurusan->nama_jurusan ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="kelas" class="form-label">Mata Pelajaran</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="id_mapel"
                                    aria-label="Default select example">
                                    <?php foreach ($mapel_list as $mapel): ?>
                                        <option value="<?= $mapel->id ?>" <?= ($jadwal->id_mapel == $mapel->id) ? 'selected' : '' ?>>
                                            <?= $mapel->nama_mapel ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Hari</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="hari"
                                    value="<?= $jadwal->hari ?>" aria-label="Hari"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label class="form-label" for="basic-icon-default-fullname">Jam Mulai</label>
                                <div class="input-group input-group-merge">
                                    <input type="time" class="form-control" id="basic-icon-default-fullname"
                                        name="jam_mulai" value="<?= $jadwal->jam_mulai ?>" aria-label="Jam Mulai"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label" for="basic-icon-default-fullname">Jam Selesai</label>
                                <div class="input-group input-group-merge">
                                    <input type="time" class="form-control" id="basic-icon-default-fullname"
                                        name="jam_selesai" value="<?= $jadwal->jam_selesai ?>" aria-label="Jam Selesai"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
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