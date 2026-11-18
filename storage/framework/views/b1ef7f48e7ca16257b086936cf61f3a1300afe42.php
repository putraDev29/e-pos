<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('breadcrumb'); ?>
    <li class="active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Executive Welcome & Summary Header -->
<div class="dash-header-card">
    <div class="dash-header-info">
        <div class="dash-header-title-row">
            <h1 class="dash-title">Ringkasan Operasional</h1>
            <span class="dash-badge-status"><i class="fa fa-circle text-success"></i> Sistem Aktif</span>
        </div>
        <p class="dash-subtitle">
            Selamat datang kembali, <strong><?php echo e(auth()->user()->name); ?></strong> &bull; <?php echo e($setting->nama_perusahaan ?? 'Apotek'); ?>

        </p>
    </div>
    <div class="dash-header-actions">
        <span class="dash-date-chip">
            <i class="fa fa-calendar-o"></i> <?php echo e(tanggal_indonesia(date('Y-m-d'))); ?>

        </span>
        <a href="<?php echo e(route('transaksi.baru')); ?>" class="btn-dash-primary">
            <i class="fa fa-plus-circle"></i> Transaksi Baru
        </a>
    </div>
</div>

<!-- Key Business Metrics (4 Clean Stat Cards) -->
<div class="row">
    <!-- Total Kategori -->
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="dash-metric-card">
            <div>
                <div class="dash-metric-header">
                    <span class="dash-metric-label">Total Kategori</span>
                    <div class="dash-metric-icon icon-indigo">
                        <i class="fa fa-folder-open-o"></i>
                    </div>
                </div>
                <div class="dash-metric-value"><?php echo e(number_format($kategori)); ?></div>
            </div>
            <div class="dash-metric-footer">
                <span style="color: #64748b;">Kategori Terdaftar</span>
                <a href="<?php echo e(route('kategori.index')); ?>" class="dash-metric-link">
                    Kelola <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Total Produk -->
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="dash-metric-card">
            <div>
                <div class="dash-metric-header">
                    <span class="dash-metric-label">Total Produk</span>
                    <div class="dash-metric-icon icon-emerald">
                        <i class="fa fa-cubes"></i>
                    </div>
                </div>
                <div class="dash-metric-value"><?php echo e(number_format($produk)); ?></div>
            </div>
            <div class="dash-metric-footer">
                <span style="color: #64748b;">Item Dalam Katalog</span>
                <a href="<?php echo e(route('produk.index')); ?>" class="dash-metric-link">
                    Lihat <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Produk Terjual -->
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="dash-metric-card">
            <div>
                <div class="dash-metric-header">
                    <span class="dash-metric-label">Produk Terjual</span>
                    <div class="dash-metric-icon icon-sky">
                        <i class="fa fa-line-chart"></i>
                    </div>
                </div>
                <div class="dash-metric-value"><?php echo e(number_format($stokpalinglaku)); ?></div>
            </div>
            <div class="dash-metric-footer">
                <span style="color: #64748b;">Item Pernah Terjual</span>
                <a href="<?php echo e(route('produkterlaku.index')); ?>" class="dash-metric-link">
                    Laporan <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stok Menipis -->
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="dash-metric-card">
            <div>
                <div class="dash-metric-header">
                    <span class="dash-metric-label">Stok Menipis</span>
                    <div class="dash-metric-icon icon-rose">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="dash-metric-value" style="<?php echo e($sisastok > 0 ? 'color: #e11d48;' : ''); ?>">
                    <?php echo e(number_format($sisastok)); ?>

                </div>
            </div>
            <div class="dash-metric-footer">
                <span style="color: <?php echo e($sisastok > 0 ? '#e11d48' : '#64748b'); ?>; font-weight: <?php echo e($sisastok > 0 ? '600' : 'normal'); ?>;">
                    <?php echo e($sisastok > 0 ? 'Perlu Restock Segera' : 'Stok Cukup'); ?>

                </span>
                <a href="<?php echo e(route('produkpalingsedikit.index')); ?>" class="dash-metric-link" style="<?php echo e($sisastok > 0 ? 'color: #e11d48;' : ''); ?>">
                    Periksa <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Sales Revenue Chart -->
<div class="row">
    <div class="col-lg-12">
        <div class="box" style="border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 1px 3px rgba(15, 23, 42, 0.03); margin-bottom: 22px;">
            <div class="box-header with-border" style="padding: 16px 20px; border-bottom: 1px solid #f1f5f9; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                <div>
                    <h3 class="box-title" style="font-size: 15px; font-weight: 700; color: #0f172a; margin: 0;">
                        <i class="fa fa-line-chart text-primary"></i> Tren Penjualan & Pendapatan
                    </h3>
                    <small style="color: #64748b; font-size: 12px; display: block; margin-top: 2px;">
                        Grafik total omset penjualan kasir harian periode berjalan
                    </small>
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span class="badge" style="background: #f8fafc; color: #475569; border: 1px solid #e2e8f0; font-size: 11.5px; font-weight: 600; padding: 6px 12px; border-radius: 6px;">
                        <i class="fa fa-calendar-o"></i> <?php echo e(tanggal_indonesia($tanggal_awal, false)); ?> &mdash; <?php echo e(tanggal_indonesia($tanggal_akhir, false)); ?>

                    </span>
                </div>
            </div>
            <div class="box-body" style="padding: 16px 20px;">
                <div style="margin-bottom: 14px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px;">
                    <div>
                        <span style="font-size: 11.5px; color: #64748b; font-weight: 600; text-transform: uppercase;">Total Omset Periode Ini:</span>
                        <div style="font-size: 18px; font-weight: 800; color: #0f172a; font-family: 'Plus Jakarta Sans', sans-serif;">
                            Rp. <?php echo e(format_uang(array_sum($data_pendapatan))); ?>

                        </div>
                    </div>
                    <span style="font-size: 11.5px; color: #059669; font-weight: 600; background: #ecfdf5; border: 1px solid #d1fae5; padding: 3px 8px; border-radius: 9999px;">
                        <i class="fa fa-check"></i> Data Terintegrasi
                    </span>
                </div>
                <div class="chart" style="position: relative; height: 260px;">
                    <canvas id="salesChart" style="height: 260px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Operational Overview & Shortcuts (2 Columns) -->
<div class="row">
    <!-- Left: Inventory Status -->
    <div class="col-md-6 col-xs-12">
        <div class="op-card">
            <div>
                <div class="op-card-header">
                    <h4 class="op-card-title">
                        <i class="fa fa-cube text-primary"></i> Status & Ringkasan Inventori
                    </h4>
                    <?php if($sisastok > 0): ?>
                        <span class="badge" style="background: #fef2f2; color: #dc2626; border: 1px solid #fecaca; font-size: 11px; padding: 3px 8px;">
                            <i class="fa fa-exclamation-circle"></i> Perlu Restock
                        </span>
                    <?php else: ?>
                        <span class="badge" style="background: #f0fdf4; color: #16a34a; border: 1px solid #bbf7d0; font-size: 11px; padding: 3px 8px;">
                            <i class="fa fa-check-circle"></i> Stok Aman
                        </span>
                    <?php endif; ?>
                </div>
                <ul class="op-list">
                    <li class="op-list-item">
                        <span class="op-list-label"><i class="fa fa-cubes text-primary"></i> Total Produk Terdaftar</span>
                        <span class="op-list-value"><?php echo e(number_format($produk)); ?> Item</span>
                    </li>
                    <li class="op-list-item">
                        <span class="op-list-label"><i class="fa fa-folder-open-o text-info"></i> Kategori Produk</span>
                        <span class="op-list-value"><?php echo e(number_format($kategori)); ?> Kategori</span>
                    </li>
                    <li class="op-list-item">
                        <span class="op-list-label"><i class="fa fa-exclamation-triangle text-danger"></i> Produk Stok Menipis (&lt; 3)</span>
                        <span class="op-list-value">
                            <span class="badge" style="background: <?php echo e($sisastok > 0 ? '#fee2e2' : '#f1f5f9'); ?>; color: <?php echo e($sisastok > 0 ? '#dc2626' : '#64748b'); ?>; font-weight: 700;">
                                <?php echo e(number_format($sisastok)); ?> Item
                            </span>
                        </span>
                    </li>
                    <li class="op-list-item">
                        <span class="op-list-label"><i class="fa fa-line-chart text-success"></i> Variasi Produk Terjual</span>
                        <span class="op-list-value text-success"><?php echo e(number_format($stokpalinglaku)); ?> Produk</span>
                    </li>
                </ul>
            </div>
            <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: 10px; border-top: 1px solid #f1f5f9; padding-top: 12px;">
                <a href="<?php echo e(route('produk.index')); ?>" class="btn btn-default btn-sm" style="font-weight: 600; border-radius: 6px;">
                    <i class="fa fa-cubes"></i> Buka Katalog Produk
                </a>
                <a href="<?php echo e(route('produkpalingsedikit.index')); ?>" class="btn btn-default btn-sm" style="font-weight: 600; border-radius: 6px; color: #dc2626;">
                    <i class="fa fa-exclamation-triangle"></i> Cek Stok Menipis
                </a>
            </div>
        </div>
    </div>

    <!-- Right: Operational Shortcuts -->
    <div class="col-md-6 col-xs-12">
        <div class="op-card">
            <div>
                <div class="op-card-header">
                    <h4 class="op-card-title">
                        <i class="fa fa-th-large text-primary"></i> Pintasan Menu Operasional
                    </h4>
                    <span class="badge" style="background: #f1f5f9; color: #475569; font-size: 11px;">Akses Cepat</span>
                </div>
                <div class="dash-tile-grid">
                    <a href="<?php echo e(route('transaksi.baru')); ?>" class="dash-tile">
                        <div class="dash-tile-icon" style="background: #ecfdf5; color: #059669;">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="dash-tile-body">
                            <span class="dash-tile-title">Kasir Penjualan</span>
                            <span class="dash-tile-desc">Buka transaksi baru</span>
                        </div>
                    </a>
                    <a href="<?php echo e(route('pembelian.index')); ?>" class="dash-tile">
                        <div class="dash-tile-icon" style="background: #eef2ff; color: #4f46e5;">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="dash-tile-body">
                            <span class="dash-tile-title">Pengadaan Stok</span>
                            <span class="dash-tile-desc">Pembelian ke supplier</span>
                        </div>
                    </a>
                    <a href="<?php echo e(route('laporan.index')); ?>" class="dash-tile">
                        <div class="dash-tile-icon" style="background: #f0f9ff; color: #0284c7;">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="dash-tile-body">
                            <span class="dash-tile-title">Rekap Penjualan</span>
                            <span class="dash-tile-desc">Laporan nota & omset</span>
                        </div>
                    </a>
                    <a href="<?php echo e(route('laporanlaba.index')); ?>" class="dash-tile">
                        <div class="dash-tile-icon" style="background: #fefce8; color: #ca8a04;">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <div class="dash-tile-body">
                            <span class="dash-tile-title">Laporan Laba Rugi</span>
                            <span class="dash-tile-desc">Hitung laba bersih</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="margin-top: 14px; font-size: 12px; color: #64748b; background: #f8fafc; border: 1px solid #e2e8f0; padding: 9px 12px; border-radius: 8px; display: flex; align-items: center; gap: 8px;">
                <i class="fa fa-info-circle text-primary" style="font-size: 14px;"></i>
                <span>Tekan <strong>Kasir Penjualan</strong> untuk mulai melayani transaksi pelanggan langsung.</span>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('AdminLTE-2/bower_components/chart.js/Chart.js')); ?>"></script>

<script>
$(function() {
    var labels = <?php echo json_encode($data_tanggal); ?>;
    var laba   = <?php echo json_encode($data_pendapatan); ?>;

    laba = laba.map(function(item) {
        return Number(item);
    });

    var ctx = document.getElementById("salesChart").getContext("2d");

    var data = {
        labels: labels,
        datasets: [{
            label: "Pendapatan",
            fillColor: "rgba(79, 70, 229, 0.12)",
            strokeColor: "#4f46e5",
            pointColor: "#4f46e5",
            pointStrokeColor: "#ffffff",
            pointHighlightFill: "#ffffff",
            pointHighlightStroke: "#4f46e5",
            data: laba
        }]
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        bezierCurve: true,
        bezierCurveTension: 0.35,
        scaleGridLineColor: "rgba(226, 232, 240, 0.6)",
        scaleFontFamily: "'Inter', sans-serif",
        scaleFontSize: 11,
        scaleFontColor: "#64748b"
    };

    new Chart(ctx).Line(data, options);
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\pos\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>