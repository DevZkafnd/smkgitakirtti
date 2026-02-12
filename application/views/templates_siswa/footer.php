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

<script src="https://cdn.jsdelivr.net/npm/tabler-icons@1.35.0/icons-react/dist/index.umd.min.js"></script>

<!-- Vendors JS -->
<script src="<?= base_url('assets/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/assets/js/main.js') ?>"></script>

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

<script>
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/33.json`)
        .then(response => response.json())
        .then(regencies => {
            var data = regencies;
            var tampung = '<option>Pilih Kabupaten</option>';
            data.forEach(element => {
                tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
            });
            document.getElementById('kabupaten').innerHTML = tampung;
        });
</script>
<script>
    const selectKabupaten = document.getElementById('kabupaten');
    selectKabupaten.addEventListener('change', (e) => {
        var kabupaten = e.target.options[e.target.selectedIndex].dataset.reg;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupaten}.json`)
            .then(response => response.json())
            .then(districts => {
                var data = districts;
                var tampung = '<option>Pilih Kecamatan</option>';
                data.forEach(element => {
                    tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                });
                document.getElementById('kecamatan').innerHTML = tampung;
            });
    });

    const selectKecamatan = document.getElementById('kecamatan');
    selectKecamatan.addEventListener('change', (e) => {
        var kecamatan = e.target.options[e.target.selectedIndex].dataset.reg;
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
            .then(response => response.json())
            .then(districts => {
                var data = districts;
                var tampung = '<option>Pilih Kelurahan</option>';
                data.forEach(element => {
                    tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                });
                document.getElementById('kelurahan').innerHTML = tampung;
            });
    });
</script>

<script>
    new DataTable('#tabelRiwayatPembayaran', {
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
</script>
</body>

</html>