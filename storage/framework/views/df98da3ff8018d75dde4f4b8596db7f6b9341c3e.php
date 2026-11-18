<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(url(auth()->user()->foto ?? 'img/user.jpg')); ?>" class="img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(auth()->user()->name); ?></p>
                <div class="user-status-text">
                    <span class="pulse-dot" style="width: 7px; height: 7px;"></span>
                    <span>Online &bull; <?php echo e(auth()->user()->level == 1 ? 'Admin' : 'Kasir'); ?></span>
                </div>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <?php if(auth()->user()->level == 1): ?>
            <li class="header">MASTER DATA</li>
            <li class="<?php echo e(request()->routeIs('kategori.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('kategori.index')); ?>">
                    <i class="fa fa-cube"></i> <span>Kategori</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('produk.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('produk.index')); ?>">
                    <i class="fa fa-cubes"></i> <span>Produk</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('supplier.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('supplier.index')); ?>">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('levelharga.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('levelharga.index')); ?>">
                    <i class="fa fa-caret-up"></i> <span>Level Harga</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('satuan.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('satuan.index')); ?>">
                    <i class="fa fa-balance-scale"></i> <span>Satuan</span>
                </a>
            </li>

            <li class="header">TRANSAKSI & KASIR</li>
            <li class="<?php echo e(request()->routeIs('transaksi.baru') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('transaksi.baru')); ?>">
                    <i class="fa fa-cart-arrow-down text-success"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('transaksi.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('transaksi.index')); ?>">
                    <i class="fa fa-shopping-basket"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('penjualan.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('penjualan.index')); ?>">
                    <i class="fa fa-shopping-cart"></i> <span>Riwayat Penjualan</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('pembelian.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pembelian.index')); ?>">
                    <i class="fa fa-cart-plus"></i> <span>Pembelian Stok</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('retur_pembelian.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('retur_pembelian.index')); ?>">
                    <i class="fa fa-undo"></i> <span>Retur Barang</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('pengeluaran.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pengeluaran.index')); ?>">
                    <i class="fa fa-arrow-down"></i> <span>Biaya / Pengeluaran</span>
                </a>
            </li>

            <li class="header">LAPORAN & ANALITIK</li>
            <li class="<?php echo e(request()->routeIs('laporan.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('laporan.index')); ?>">
                    <i class="fa fa-line-chart"></i> <span>Laporan Penjualan</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('laporanlaba.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('laporanlaba.index')); ?>">
                    <i class="fa fa-money"></i> <span>Laporan Laba / Rugi</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('laporanstok.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('laporanstok.index')); ?>">
                    <i class="fa fa-building"></i> <span>Laporan Sisa Stok</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('laporanpembelian.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('laporanpembelian.index')); ?>">
                    <i class="fa fa-file-text-o"></i> <span>Laporan Pembelian</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('saldo.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('saldo.index')); ?>">
                    <i class="fa fa-credit-card"></i> <span>Buku Saldo</span>
                </a>
            </li>

            <li class="header">PENGATURAN SISTEM</li>
            <li class="<?php echo e(request()->routeIs('user.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('user.index')); ?>">
                    <i class="fa fa-users"></i> <span>Kelola User</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('setting.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('setting.index')); ?>">
                    <i class="fa fa-cogs"></i> <span>Pengaturan Toko</span>
                </a>
            </li>
            <?php else: ?>
            <li class="header">KASIR</li>
            <li class="<?php echo e(request()->routeIs('transaksi.baru') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('transaksi.baru')); ?>">
                    <i class="fa fa-cart-arrow-down text-success"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="<?php echo e(request()->routeIs('transaksi.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('transaksi.index')); ?>">
                    <i class="fa fa-shopping-basket"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\project\pos\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>