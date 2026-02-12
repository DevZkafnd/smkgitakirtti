<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-end py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            <p>&copy; <?php echo date("Y"); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets/assets/vendor/libs/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/assets/vendor/libs/popper/popper.js') ?>"></script>
<script src="<?= base_url('assets/assets/vendor/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

<script src="<?= base_url('assets/assets/vendor/js/menu.js') ?>"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url('assets/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

<!-- Page JS -->
<script src="<?= base_url('assets/assets/js/dashboards-analytics.js') ?>"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.print.min.js"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/assets/js/main.js') ?>"></script>

<script>
    // 1. Load Provinsi
    if (document.getElementById('provinsi')) {
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
            .then(res => res.json())
            .then(provinsi => {
                let opsi = '<option value="">Pilih Provinsi</option>';
                const provinsiLama = document.getElementById('provinsi_lama');
                const provinsiLamaValue = provinsiLama ? provinsiLama.value : '';

                provinsi.forEach(p => {
                    const selected = p.name === provinsiLamaValue ? 'selected' : '';
                    opsi += `<option value="${p.name}" data-id="${p.id}" ${selected}>${p.name}</option>`;
                });
                document.getElementById('provinsi').innerHTML = opsi;

                if (provinsiLamaValue) {
                    document.getElementById('provinsi').dispatchEvent(new Event('change'));
                }
            });

        // 2. Load Kabupaten berdasarkan Provinsi
        document.getElementById('provinsi').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            if (!selectedOption) return;
            const id = selectedOption.dataset.id;
            
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id}.json`)
                .then(res => res.json())
                .then(kabupaten => {
                    let opsi = '<option value="">Pilih Kabupaten</option>';
                    const kabupatenLama = document.getElementById('kabupaten_lama');
                    const kabupatenLamaValue = kabupatenLama ? kabupatenLama.value : '';

                    kabupaten.forEach(k => {
                        const selected = k.name === kabupatenLamaValue ? 'selected' : '';
                        opsi += `<option value="${k.name}" data-id="${k.id}" ${selected}>${k.name}</option>`;
                    });
                    document.getElementById('kabupaten').innerHTML = opsi;

                    if (kabupatenLamaValue) {
                        document.getElementById('kabupaten').dispatchEvent(new Event('change'));
                    }
                });
        });

        // 3. Load Kecamatan berdasarkan Kabupaten
        if (document.getElementById('kabupaten')) {
            document.getElementById('kabupaten').addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];
                if (!selectedOption) return;
                const id = selectedOption.dataset.id;

                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${id}.json`)
                    .then(res => res.json())
                    .then(kecamatan => {
                        let opsi = '<option value="">Pilih Kecamatan</option>';
                        const kecamatanLama = document.getElementById('kecamatan_lama');
                        const kecamatanLamaValue = kecamatanLama ? kecamatanLama.value : '';

                        kecamatan.forEach(k => {
                            const selected = k.name === kecamatanLamaValue ? 'selected' : '';
                            opsi += `<option value="${k.name}" data-id="${k.id}" ${selected}>${k.name}</option>`;
                        });
                        document.getElementById('kecamatan').innerHTML = opsi;

                        if (kecamatanLamaValue) {
                            document.getElementById('kecamatan').dispatchEvent(new Event('change'));
                        }
                    });
            });
        }

        // 4. Load Kelurahan berdasarkan Kecamatan
        if (document.getElementById('kecamatan')) {
            document.getElementById('kecamatan').addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];
                if (!selectedOption) return;
                const id = selectedOption.dataset.id;

                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${id}.json`)
                    .then(res => res.json())
                    .then(kelurahan => {
                        let opsi = '<option value="">Pilih Kelurahan</option>';
                        const kelurahanLama = document.getElementById('kelurahan_lama');
                        const kelurahanLamaValue = kelurahanLama ? kelurahanLama.value : '';

                        kelurahan.forEach(k => {
                            const selected = k.name === kelurahanLamaValue ? 'selected' : '';
                            opsi += `<option value="${k.name}" ${selected}>${k.name}</option>`;
                        });
                        document.getElementById('kelurahan').innerHTML = opsi;
                    });
            });
        }
    }
</script>


<script>
    new DataTable('#tabelAdmin', {
        layout: {
            topStart: {
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6] // Index kolom yang ingin dicetak
                        },
                        customize: function (win) {
                            $(win.document.body).css('font-size', '10pt');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit')
                                .css('width', '100%');
                        }
                    }
                ]
            }
        }
    });

    new DataTable('#tabelSiswa', {
        layout: {
            topStart: {
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7] // Index kolom yang ingin dicetak
                        },
                        customize: function (win) {
                            $(win.document.body).css('font-size', '10pt');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit')
                                .css('width', '100%');
                        }
                    }
                ]
            }
        }
    });

    new DataTable('#tabelRiwayatPembayaranSiswa', {
        layout: {
            topStart: {
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10] // Index kolom yang ingin dicetak
                        },
                        customize: function (win) {
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit')
                                .css('width', '100%');
                        }
                    }
                ]
            }
        }
    });

    new DataTable('#tabelTransaksiHariIni', {
        paging: true,
        lengthChange: false,
        layout: {
            bottomEnd: {
                paging: {
                    firstLast: false
                }
            }
        }
    });

    new DataTable('#tabelJadwal', {
        order: [[2, 'asc']],
        lengthMenu: [20, 40, 60, 80, 100],
        layout: {
            topStart: {
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4] // Index kolom yang ingin dicetak
                        },
                        customize: function (win) {
                            $(win.document.body).css('font-size', '10pt');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit')
                                .css('width', '100%');
                        }
                    }
                ]
            }
        }
    });
</script>

<script>
    const toggleForm = () => {
        const container = document.querySelector('.container');
        container.classList.toggle('active');
    };

    const triggerPassword = document.querySelector('.fa-eye-slash');

    const showPassword = trigger => {
        if (!trigger) return;
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

</body>

</html>