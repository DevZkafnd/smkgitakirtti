<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= base_url('siswa/dashboard') ?>" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="50">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-3">
        <!-- Dashboard -->
        <li class="menu-item <?= is_active('dashboard') ?> pb-2">
            <a href="<?= base_url('siswa/dashboard') ?>" class="menu-link">
                <i class="menu-icon ti ti-layout-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Jadwal -->
        <li class="menu-item <?= is_active('jadwal') ?> pb-2">
            <a href="<?= base_url('siswa/jadwal') ?>" class="menu-link">
                <i class="menu-icon ti ti-calendar-event"></i>
                <div data-i18n="Analytics">Jadwal Pelajaran</div>
            </a>
        </li>

        <!-- Jadwal -->
        <li class="menu-item <?= is_active('pembayaran_spp') ?> pb-2">
            <a href="<?= base_url('siswa/pembayaran_spp') ?>" class="menu-link">
                <i class="menu-icon ti ti-credit-card"></i>
                <div data-i18n="Analytics">Pembayaran SPP</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->