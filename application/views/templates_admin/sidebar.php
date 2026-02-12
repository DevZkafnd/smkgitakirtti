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
            <a href="<?= base_url('admin/dashboard') ?>" class="menu-link">
                <i class="menu-icon ti ti-layout-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Data User -->
        <li class="menu-item <?= is_menu_open(['data_admin', 'data_siswa']) ?> pb-2">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-users"></i>
                <div data-i18n="Analytics">Data User</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item <?= is_active('data_admin') ?>">
                    <a href="<?= base_url('admin/data_admin') ?>" class="menu-link">
                        <div>Admin</div>
                    </a>
                </li>
                <li class="menu-item <?= is_active('data_siswa') ?>">
                    <a href="<?= base_url('admin/data_siswa') ?>" class="menu-link">
                        <div>Siswa</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Jadwal -->
        <li class="menu-item <?= is_active('data_jadwal') ?> pb-2">
            <a href="<?= base_url('admin/data_jadwal') ?>" class="menu-link">
                <i class="menu-icon ti ti-calendar-event"></i>
                <div data-i18n="Analytics">Data Jadwal</div>
            </a>
        </li>

        <!-- Jadwal -->
        <li class="menu-item <?= is_active('riwayat_transaksi') ?> pb-2">
            <a href="<?= base_url('admin/riwayat_transaksi') ?>" class="menu-link">
                <i class="menu-icon ti ti-history"></i>
                <div data-i18n="Analytics">Riwayat Transaksi</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->