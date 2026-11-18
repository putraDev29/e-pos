

<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('breadcrumb'); ?>
    <li class="active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Cashier Welcome & Header Card -->
<div class="dash-header-card">
    <div class="dash-header-info">
        <div class="dash-header-title-row">
            <h1 class="dash-title">Terminal Kasir Penjualan</h1>
            <span class="dash-badge-status"><i class="fa fa-circle text-success"></i> Kasir Aktif</span>
        </div>
        <p class="dash-subtitle">
            Petugas Kasir: <strong><?php echo e(auth()->user()->name); ?></strong> &bull; Siap melayani transaksi penjualan
        </p>
    </div>
    <div class="dash-header-actions">
        <span class="dash-date-chip">
            <i class="fa fa-calendar-o"></i> <?php echo e(tanggal_indonesia(date('Y-m-d'))); ?>

        </span>
        <a href="<?php echo e(route('transaksi.baru')); ?>" class="btn-dash-primary">
            <i class="fa fa-shopping-cart"></i> Buka Transaksi Baru
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="box" style="border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 1px 3px rgba(15, 23, 42, 0.03); padding: 40px 20px; text-align: center; background: #ffffff;">
            <div style="max-width: 500px; margin: 0 auto;">
                <div style="width: 64px; height: 64px; border-radius: 16px; background: #ecfdf5; color: #059669; display: inline-flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 16px;">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin: 0 0 8px 0; font-family: 'Plus Jakarta Sans', sans-serif;">
                    Layanan Transaksi Penjualan
                </h3>
                <p style="font-size: 13.5px; color: #64748b; line-height: 1.5; margin: 0 0 24px 0;">
                    Tekan tombol di bawah untuk langsung membuka layar kasir, scan barcode produk, dan cetak struk pembayaran pelanggan.
                </p>
                <a href="<?php echo e(route('transaksi.baru')); ?>" class="btn-dash-primary" style="padding: 12px 28px; font-size: 15px; border-radius: 10px; display: inline-flex; gap: 10px;">
                    <i class="fa fa-shopping-basket"></i> Mulai Transaksi Penjualan
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /.row (main row) -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\pos\resources\views/kasir/dashboard.blade.php ENDPATH**/ ?>