<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mb-4">
                    <div class="card" style="height: auto;">
                        <div class="card-body">
                            <div class="mb-4 pb-2 align-items-center">
                                <h5 class="mb-0">Biaya SPP</h5>
                            </div>
                            <div class="mb-4 pb-2 align-items-center">
                                <h6 class="mb-0">Untuk Menjadi Perhatian</h6>
                            </div>
                            <div class="mb-4 pb-2 align-items-center">
                                <p class="mb-0">Klik pada Bayar Sekarang, dan pilih metode pembayaran yang paling mudah
                                    bagi Anda. Lakukan
                                    pembayaran H+1 setelah Anda mendapatkan tagihan (invoice) Anda.</p>
                            </div>
                            <div class="mb-4 pb-2 align-items-center">
                                <p class="mb-0">Pembayaran SPP atau Pembayaran Registrasi dilakukan di setiap bulan
                                    selama siswa masih
                                    mengikuti proses pembelajaran atau belum lulus dari SMK GITTA KIRTTI 1 JAKARTA.
                                    Lakukan pembayaran
                                    sesuai dengan jadwal agar Anda dapat di-aktifkan pada bulan tersebut. Terima kasih.
                                </p>
                            </div>

                            <div class="dropdowns">
                                <input type="checkbox" id="dropdown">

                                <label class="dropdown__face" for="dropdown">
                                    <div class="dropdown__icon text-bg-primary">
                                        <i class="bx bx-credit-card"></i>
                                    </div>
                                    <div class="dropdown__text">Pembayaran Biaya SPP</div>
                                    <div class="dropdown__arrow"></div>
                                </label>

                                <ul class="dropdown__items card text-secondary">
                                    <div class="dropdown__items_header">
                                        <li>
                                            <p class="fw-bold">Pembayaran Biaya SPP</p>
                                            <img src="<?= base_url('assets/img/logo.png') ?>" width="45" alt="">
                                        </li>
                                    </div>
                                    <div class="dropdown__items_content">
                                        <div>
                                            <li>Nomor Induk Siswa</li>
                                            <li><?= $user->nis; ?></li>
                                        </div>
                                        <div>
                                            <li>Nama</li>
                                            <li><?= $user->nama; ?></li>
                                        </div>
                                        <div>
                                            <li>Kelas</li>
                                            <li><?= $user->nama_kelas; ?></li>
                                        </div>
                                        <div>
                                            <li>Jurusan</li>
                                            <li><?= $user->nama_jurusan; ?></li>
                                        </div>
                                    </div>
                                    <hr>

                                    <?php if (!empty($biaya_spp)): ?>
                                        <div class="dropdown__items_content">
                                            <div>
                                                <li>Total Biaya</li>
                                                <li><?= format_rupiah($biaya_spp->biaya_spp); ?></li>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="dropdown__items_content">
                                            <li>Biaya SPP belum tersedia.</li>
                                        </div>
                                    <?php endif; ?>



                                    <form id="payment-form" method="post"
                                        action="<?= site_url('siswa/Pembayaran_spp/finish') ?>">
                                        <input type="hidden" name="result_type" id="result-type">
                                        <input type="hidden" name="result_data" id="result-data">
                                    </form>

                                    <?php if (!$sudah_bayar): ?>
                                        <button class="btn btn-primary mt-4" id="pay-button">BAYAR SEKARANG</button>
                                    <?php else: ?>
                                        <div class="alert alert-success mt-4 text-center">Anda sudah melakukan pembayaran
                                            bulan ini.
                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <svg>
                                <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" result="blur" />
                                    <feColorMatrix in="blur" type="matrix"
                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                                    <feBlend in="SourceGraphic" in2="goo" />
                                </filter>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dropdowns {
        position: relative;
        filter: url(#goo);
        border-radius: 10px;
        background-color: #E3F2FD;
    }

    .dropdown__face,
    .dropdown__items {
        padding: 20px;
        cursor: pointer;
    }

    .dropdown__face {
        display: block;
        position: relative;
    }

    .dropdown__icon {
        width: 60px;
        height: 61px;
        position: absolute;
        display: flex;
        top: 0;
        left: 0;
        border-radius: 10px 0 0 10px;
    }

    .dropdown__icon i {
        font-size: 36px;
        margin-top: 14px;
        margin-left: 14px;
    }

    .dropdown__text {
        padding-left: 45px;
    }

    .dropdown__items {
        display: flex;
        flex-direction: column;
        margin: 0;
        position: absolute;
        right: -2%;
        top: 50%;
        width: 104%;
        list-style: none;
        list-style-type: none;
        display: flex;
        visibility: hidden;
        z-index: -1;
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.93, 0.88, 0.1, 0.8);
        cursor: auto;
    }

    .dropdown__items_header li {
        position: relative;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        align-items: center;
    }

    .dropdown__items_content div {
        position: relative;
        display: flex;
        justify-content: space-between;
        line-height: 25px;
    }

    .dropdown__arrow {
        border-bottom: 2px solid;
        border-right: 2px solid;
        position: absolute;
        top: 50%;
        right: 30px;
        width: 7.5px;
        height: 7.5px;
        transform: rotate(45deg) translateY(-50%);
        transform-origin: right;
    }

    .dropdowns input {
        display: none;
    }

    .dropdowns input:checked~.dropdown__items {
        top: calc(100% + 42.5px);
        visibility: visible;
        opacity: 1;
    }

    svg {
        display: none;
    }

    @media screen and (max-width: 768px) {

        .dropdown__face,
        .dropdown__items {
            padding: 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .dropdown__items {
            position: absolute;
            width: 115%;
            right: -7.5%;
        }
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="YOUR-CLIENT-KEY-HERE"></script>
<script>
    $('#pay-button').click(function (event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        $.ajax({
            url: '<?= site_url() ?>/snap/token',
            cache: false,

            success: function (data) {
                //location = data;

                console.log('token = ' + data);

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }

                snap.pay(data, {

                    onSuccess: function (result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function (result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function (result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
</script>