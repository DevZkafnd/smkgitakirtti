<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/data_admin/tambah_data_admin_simpan') ?>"
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
                                    aria-describedby="basic-icon-default-fullname2" />
                                <span class="input-group-text fa fa-eye-slash" id="hide"></span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="jenis_kelamin"
                                aria-label="Default select example" required>
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-phone">No Telepon</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-phone" class="form-control phone-mask"
                                    name="no_telp" placeholder="No Telepon" aria-label="No Telepon"
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

<style>
    #hide {
        font-size: 13.75px;
    }
</style>

<script>
    setTimeout(function () {
        const alert = document.querySelector('.alert');
        if (alert) {
            alert.remove('show'); // Ini akan benar-benar menghapus elemen dari DOM
            alert.classList.add('fade');
        }
    }, 3000); // 2 detik

    const toggleForm = () => {
        const container = document.querySelector('.container');
        container.classList.toggle('active');
    };

    const triggerPassword = document.querySelector('.fa-eye-slash');

    const showPassword = trigger => {
        trigger.addEventListener('click', () => {
            if (trigger.previousElementSibling.getAttribute('type') === 'password') {
                trigger.previousElementSibling.setAttribute('type', 'text');
                trigger.classList.remove('fa-eye-slash');
                trigger.classList.add('fa-eye');
            } else if (trigger.previousElementSibling.getAttribute('type') === 'text') {
                trigger.previousElementSibling.setAttribute('type', 'password');
                trigger.classList.remove('fa-eye');
                trigger.classList.add('fa-eye-slash');
            }
        });
    }

    showPassword(triggerPassword);
</script>