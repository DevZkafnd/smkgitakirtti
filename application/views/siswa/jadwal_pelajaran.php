<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4">
            <?php
            $hariList = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

            foreach ($hariList as $hari):
                $jadwalHari = array_filter($jadwal, function ($item) use ($hari) {
                    return $item->hari === $hari;
                });
                ?>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header bg-primary">
                            <h4 class="mb-0 fw-bold text-center text-white"><?= $hari ?></h4>
                        </div>
                        <div class="card-body p-0">
                            <?php if (empty($jadwalHari)): ?>
                                <p class="text-muted mb-0">Tidak ada jadwal hari ini.</p>
                            <?php else: ?>
                                <?php foreach ($jadwalHari as $row): ?>
                                    <div class="mb-0 p-3 border-top">
                                        <div class="fw-semibold"><?= $row->nama_mapel ?></div>
                                        <div class="small text-muted">🕒 <?= date('H:i', strtotime($row->jam_mulai)) ?> -
                                            <?= date('H:i', strtotime($row->jam_selesai)) ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- / Content -->