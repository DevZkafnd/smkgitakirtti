<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_jadwal/tambah_data_jadwal_simpan') ?>"
                        enctype="multipart/form-data" method="POST" autocomplete="off">
                        <div class="row">
                            <div class="col mb-2">
                                <label class="form-label" for="basic-icon-default-fullname">Kelas</label>
                                <div class="input-group input-group-merge">
                                    <select name="id_kelas" class="form-select" id="id_kelas">
                                        <option value="-">Pilih Kelas</option>
                                        <?php foreach ($kelas as $k): ?>
                                            <option value="<?= $k->id; ?>"><?= $k->nama_kelas; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <label for="exampleFormControlSelect1" class="form-label">Jurusan</label>
                                <select name="id_jurusan" class="form-select" id="id_jurusan">
                                    <option value="-">Pilih Jurusan</option>
                                    <?php foreach ($jurusan as $j): ?>
                                        <option value="<?= $j->id_jurusan; ?>"><?= $j->nama_jurusan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col mb-2">
                                <label for="exampleFormControlSelect1" class="form-label">Mata Pelajaran</label>
                                <select name="id_mapel" class="form-select" id="id_mapel">
                                    <option value="-">Pilih Mata Pelajaran</option>
                                    <?php foreach ($mapel as $j): ?>
                                        <option value="<?= $j->id; ?>"><?= $j->nama_mapel; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Hari</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="hari"
                                    placeholder="Hari" aria-label="Hari" aria-describedby="basic-icon-default-fullname2"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label class="form-label" for="basic-icon-default-fullname">Jam Mulai</label>
                                <div class="input-group input-group-merge">
                                    <input type="time" class="form-control" id="basic-icon-default-fullname"
                                        name="jam_mulai" placeholder="Jam Mulai" aria-label="Jam Mulai"
                                        aria-describedby="basic-icon-default-fullname2" required />
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label" for="basic-icon-default-fullname">Jam Selesai</label>
                                <div class="input-group input-group-merge">
                                    <input type="time" class="form-control" id="basic-icon-default-fullname"
                                        name="jam_selesai" placeholder="Jam Selesai" aria-label="Jam Selesai"
                                        aria-describedby="basic-icon-default-fullname2" required />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-icon btn-primary w-100">
                            <span class="tf-icons bx bx-save"></span>&nbsp;Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->