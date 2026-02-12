<header class="sub-header text-white">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url('user/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">PPDB</li>
        </ol>
    </nav>
    <p>PPDB</p>
</header>

<section class="container wow fadeInUp">
    <h1 class="text-center text-primary py-5">Form Pendaftaran</h1>
    <form action="<?= base_url('ppdb/tambah_siswa_simpan') ?>" class="form py-4 px-3" autocomplete="off"
        enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="input-box">
                    <label>NIK</label>
                    <input type="number" name="nik" id="nik" placeholder="Nomor Induk Kependudukan" required />
                </div>
                <div class="input-box">
                    <label>NIS</label>
                    <input type="number" name="nis" id="nis" placeholder="Nomor Induk Siswa" required />
                </div>
                <div class="input-box">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required />
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required />
                </div>
                <div class="input-box password-wrapper">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password"
                        required />
                    <div class="toggle-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="eye-icon">
                            <path
                                d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                            <path
                                d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                            <path
                                d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                        </svg>
                    </div>
                </div>
                <div class="input-box">
                    <label>No Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" placeholder="No Telepon" required />
                </div>
                <div class="input-box">
                    <label>Jenis Kelamin</label>
                    <div class="select-box">
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">- Jenis Kelamin -</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="NIK" required />
                </div>
                <div class="input-box">
                    <label>Provinsi</label>
                    <div class="select-box">
                        <select name="provinsi" id="provinsi">
                            <option value="">- Pilih Provinsi -</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Kabupaten</label>
                    <div class="select-box">
                        <select name="kabupaten" id="kabupaten">
                            <option value="">- Pilih Provinsi dahulu -</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Kecamatan</label>
                    <div class="select-box">
                        <select name="kecamatan" id="kecamatan">
                            <option value="">- Pilih Kabupaten dahulu -</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Kelurahan</label>
                    <div class="select-box">
                        <select name="kelurahan" id="kelurahan">
                            <option value="">- Pilih Kecamatan dahulu -</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Nama Ayah</label>
                    <input type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required />
                </div>
                <div class="input-box">
                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required />
                </div>
                <div class="input-box">
                    <label>Nama Wali</label>
                    <input type="text" name="nama_wali" id="nama_wali" placeholder="Nama Wali" />
                    <span style="font-size: 12px;">* Kosongkan jika tidak ada.</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-box">
                    <label>Pekerjaan Ayah</label>
                    <div class="select-box">
                        <select name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                            <option value="">- Pekerjaan Ayah -</option>
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
                <div class="input-box">
                    <label>Pekerjaan Ibu</label>
                    <div class="select-box">
                        <select name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                            <option value="">- Pekerjaan Ibu -</option>
                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
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
                <div class="input-box">
                    <label>Pekerjaan Wali</label>
                    <div class="select-box">
                        <select name="pekerjaan_wali" id="pekerjaan_wali" required>
                            <option value="">- Pekerjaan Wali -</option>
                            <option value="Tidak ada wali">Tidak ada wali</option>
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
                <div class="input-box">
                    <label>Penghasilan Ortu / Wali</label>
                    <div class="select-box">
                        <select name="penghasilan_ortu" id="penghasilan_ortu">
                            <option value="">- Penghasilan / Bulan -</option>
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
                <div class="input-box">
                    <label>No Telepon Ortu / Wali</label>
                    <input type="number" name="no_telp_ortu" id="no_telp_ortu" placeholder="No Telepon Ortu / Wali"
                        required />
                </div>
                <div class="input-box">
                    <label>Sekolah Asal</label>
                    <input type="text" name="nama_ayah" id="nama_ayah" placeholder="Sekolah Asal" />
                </div>
                <div class="input-box">
                    <label>Kelas</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" placeholder="Kelas" />
                </div>
                <div class="input-box">
                    <label>Tahun Lulus</label>
                    <input type="number" name="nama_wali" id="nama_wali" placeholder="Tahun Lulus" />
                </div>
                <div class="input-file">
                    <label for="foto_siswa" class="form-label">Foto Siswa</label>
                    <input class="form-control" type="file" name="foto_siswa" id="foto_siswa" required>
                </div>
                <div class="input-file">
                    <label for="foto_kk" class="form-label">Foto KK (Kartu Keluarga)</label>
                    <input class="form-control" type="file" name="foto_kk" id="foto_kk" required>
                </div>
                <div class="input-file">
                    <label for="foto_ijazah" class="form-label">Foto Ijazah</label>
                    <input class="form-control" type="file" name="foto_ijazah" id="foto_ijazah" required>
                </div>
                <div class="input-file">
                    <label for="foto_akte" class="form-label">Foto Akte / KTP</label>
                    <input class="form-control" type="file" name="foto_akte" id="foto_akte" required>
                </div>
            </div>
        </div>
        <div class="input-box">
            <label>Alamat</label>
            <textarea class="form-control text-dark" id="exampleFormControlTextarea1" rows="5"
                placeholder="Alamat Lengkap" name="alamat" id="alamat"></textarea>
        </div>
        <button>Kirim Pendaftaran</button>
    </form>
</section>