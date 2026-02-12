<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_siswa/tambah_data_siswa_simpan') ?>"
                        enctype="multipart/form-data" method="POST" autocomplete="off">
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nomor Induk Kependudukan</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="basic-icon-default-fullname" name="nik"
                                    placeholder="Nomor Induk Kependudukan" aria-label="Nomor Induk Kependudukan"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nomor Induk Siswa</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="basic-icon-default-fullname" name="nis"
                                    placeholder="Nomor Induk Siswa" aria-label="Nomor Induk Siswa"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="nama"
                                    placeholder="Nama Lengkap" aria-label="Nama Lengkap"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="email" class="form-control" id="basic-icon-default-fullname" name="email"
                                    placeholder="Email" aria-label="Email"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" class="form-control" id="basic-icon-default-fullname"
                                    name="password" placeholder="Password" aria-label="Password"
                                    aria-describedby="basic-icon-default-fullname2" required />
                                <span class="input-group-text fa fa-eye-slash" id="hide"></span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp" placeholder="No Telepon" aria-label="No Telepon"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="jenis_kelamin"
                                aria-label="Default select example" required>
                                <option value="-" selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Tanggal Lahir</label>
                            <div class="input-group input-group-merge">
                                <input type="date" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="tgl_lahir" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Provinsi</label>
                            <div class="input-group input-group-merge">
                                <select name="provinsi" class="form-select" id="provinsi">
                                    <option>Pilih Provinsi</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Kabupaten</label>
                            <div class="input-group input-group-merge">
                                <select name="kabupaten" class="form-select" id="kabupaten">
                                    <option>Pilih Kabupaten/Kota</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Kecamatan</label>
                            <div class="input-group input-group-merge">
                                <select name="kecamatan" class="form-select" id="kecamatan">
                                    <option>Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Kelurahan</label>
                            <div class="input-group input-group-merge">
                                <select name="kelurahan" class="form-select" id="kelurahan">
                                    <option>Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Ayah</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    name="nama_ayah" placeholder="Nama Ayah" aria-label="Nama Ayah"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Ibu</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname" name="nama_ibu"
                                    placeholder="Nama Ibu" aria-label="Nama Ibu"
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Nama Wali</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    name="nama_wali" placeholder="Nama Wali" aria-label="Nama Wali"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                            <small>* Kosongkan jika tidak ada.</small>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Pekerjaan Ayah</label>
                            <div class="input-group input-group-merge">
                                <select name="pekerjaan_ayah" class="form-select" id="pekerjaan_ayah">
                                    <option value="-">Pekerjaan Ayah</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Honorer">Honorer</option>
                                    <option value="PNS">PNS</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Pekerjaan Ibu</label>
                            <div class="input-group input-group-merge">
                                <select name="pekerjaan_ibu" class="form-select" id="pekerjaan_ibu">
                                    <option value="-">Pekerjaan Ibu</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Honorer">Honorer</option>
                                    <option value="PNS">PNS</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Pekerjaan Wali</label>
                            <div class="input-group input-group-merge">
                                <select name="pekerjaan_wali" class="form-select" id="pekerjaan_wali">
                                    <option value="-">Pekerjaan Wali</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Honorer">Honorer</option>
                                    <option value="PNS">PNS</option>
                                </select>
                            </div>
                            <small>* Kosongkan jika tidak ada.</small>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon Ortu / Wali</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp_ortu" placeholder="No Telepon Ortu / Wali"
                                    aria-label="No Telepon Ortu / Wali" aria-describedby="basic-icon-default-phone2"
                                    required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Sekolah Asal</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="sekolah_asal" placeholder="Sekolah Asal" aria-label="Sekolah Asal"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-2">
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
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Jurusan</label>
                            <div class="input-group input-group-merge">
                                <select name="id_jurusan" class="form-select" id="id_jurusan">
                                    <option value="-">Pilih Jurusan</option>
                                    <?php foreach ($jurusan as $j): ?>
                                        <option value="<?= $j->id_jurusan; ?>"><?= $j->nama_jurusan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Tahun Lulus</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="thn_lulus" placeholder="Tahun Lulus" aria-label="Tahun Lulus"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-fullname">Penghasilan Ortu / Wali</label>
                            <div class="input-group input-group-merge">
                                <select name="penghasilan_ortu" class="form-select" id="penghasilan_ortu">
                                    <option value="Penghasilan Ortu / Wali">Penghasilan / Bulan</option>
                                    <option value="< < Rp. 1.000.000">
                                        < < Rp. 1.000.000</option>
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000">
                                        Rp. 1.000.000 - Rp. 2.000.000</option>
                                    <option value="Rp. 2.000.000 - Rp. 3.000.000">
                                        Rp. 2.000.000 - Rp. 3.000.000</option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000">
                                        Rp. 3.000.000 - Rp. 4.000.000</option>
                                    <option value="Rp. 4.000.000 - Rp. 5.000.000">
                                        Rp. 4.000.000 - Rp. 5.000.000</option>
                                    <option value="Rp. 5.000.000 > >">
                                        Rp. 5.000.000 > ></option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Foto Siswa</label>
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="foto_siswa" placeholder="Foto Siswa" aria-label="Foto Siswa"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Foto KK</label>
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="foto_kk" placeholder="Foto KK" aria-label="Foto KK"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Foto Ijazah</label>
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="foto_ijazah" placeholder="Foto Ijazah" aria-label="Foto Ijazah"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">Foto Akte</label>
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="foto_akte" placeholder="Foto Akte" aria-label="Foto Akte"
                                    aria-describedby="basic-icon-default-phone2" required />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="basic-icon-default-message">Alamat</label>
                            <div class="input-group input-group-merge">
                                <textarea id="basic-icon-default-message" class="form-control"
                                    placeholder="Alamat Lengkap" aria-label="Alamat Lengkap"
                                    aria-describedby="basic-icon-default-message2" rows="3" cols="50" name="alamat"
                                    required></textarea>
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

<script>
    // Ambil data Provinsi terlebih dahulu
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
        .then(provinces => {
            let options = '<option value="">Pilih Provinsi</option>';
            provinces.forEach(prov => {
                options += `<option value="${prov.name}" data-id="${prov.id}">${prov.name}</option>`;
            });
            document.getElementById('provinsi').innerHTML = options;
        });

    // Saat Provinsi dipilih, ambil data Kabupaten/Kota
    document.getElementById('provinsi').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const provId = selectedOption.getAttribute('data-id');

        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provId}.json`)
            .then(response => response.json())
            .then(kabupatenList => {
                let options = '<option value="">Pilih Kabupaten/Kota</option>';
                kabupatenList.forEach(kab => {
                    options += `<option value="${kab.name}" data-id="${kab.id}">${kab.name}</option>`;
                });
                document.getElementById('kabupaten').innerHTML = options;
                document.getElementById('kecamatan').innerHTML = '<option value="">Pilih Kecamatan</option>';
                document.getElementById('kelurahan').innerHTML = '<option value="">Pilih Kelurahan</option>';
            });
    });

    // Saat Kabupaten dipilih, ambil data Kecamatan
    document.getElementById('kabupaten').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const kabId = selectedOption.getAttribute('data-id');

        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabId}.json`)
            .then(response => response.json())
            .then(kecamatanList => {
                let options = '<option value="">Pilih Kecamatan</option>';
                kecamatanList.forEach(kec => {
                    options += `<option value="${kec.name}" data-id="${kec.id}">${kec.name}</option>`;
                });
                document.getElementById('kecamatan').innerHTML = options;
                document.getElementById('kelurahan').innerHTML = '<option value="">Pilih Kelurahan</option>';
            });
    });

    // Saat Kecamatan dipilih, ambil data Kelurahan
    document.getElementById('kecamatan').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const kecId = selectedOption.getAttribute('data-id');

        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecId}.json`)
            .then(response => response.json())
            .then(kelurahanList => {
                let options = '<option value="">Pilih Kelurahan</option>';
                kelurahanList.forEach(kel => {
                    options += `<option value="${kel.name}" data-id="${kel.id}">${kel.name}</option>`;
                });
                document.getElementById('kelurahan').innerHTML = options;
            });
    });
</script>