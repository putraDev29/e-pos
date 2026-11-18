<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="logo">
        <span class="logo-mini"><b><?php echo e(strtoupper(substr($setting->nama_perusahaan ?? 'POS', 0, 2))); ?></b></span>
        <span class="logo-lg">
            <span class="brand-text"><?php echo e($setting->nama_perusahaan ?? 'POINT OF SALE'); ?></span>
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="navbar-left-wrapper">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" title="Buka/Tutup Sidebar">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle navigation</span>
            </a>

            <!-- Live Status Indicator -->
            <div class="nav-status-pill hidden-xs">
                <span class="pulse-dot"></span>
                <span>POS Online</span>
            </div>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav" style="display: flex; align-items: center;">
                <!-- Quick POS Shortcut -->
                <li>
                    <a href="<?php echo e(route('transaksi.baru')); ?>" class="nav-btn-pos" title="Buka Transaksi Kasir">
                        <i class="fa fa-cart-arrow-down"></i>
                        <span class="hidden-xs">Kasir Baru</span>
                    </a>
                </li>

                <!-- User Account -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle user-pill-btn" data-toggle="dropdown">
                        <img src="<?php echo e(url(auth()->user()->foto ?? 'img/user.jpg')); ?>" class="user-image img-profil" alt="User Image">
                        <span class="hidden-xs user-name-label"><?php echo e(auth()->user()->name); ?></span>
                        <span class="user-role-badge hidden-xs"><?php echo e(auth()->user()->level == 1 ? 'Admin' : 'Kasir'); ?></span>
                        <i class="fa fa-angle-down hidden-xs chevron-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo e(url(auth()->user()->foto ?? 'img/user.jpg')); ?>" class="img-circle img-profil" alt="User Image">
                            <p>
                                <?php echo e(auth()->user()->name); ?>

                                <small class="user-email-badge"><?php echo e(auth()->user()->email); ?> &bull; <?php echo e(auth()->user()->level == 1 ? 'Administrator' : 'Kasir'); ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(route('user.profil')); ?>" class="btn btn-default btn-sm"><i class="fa fa-user"></i> Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-danger btn-sm" onclick="$('#logout-form').submit()"><i class="fa fa-sign-out"></i> Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form" style="display: none;">
    <?php echo csrf_field(); ?>
</form><?php /**PATH C:\project\pos\resources\views/layouts/header.blade.php ENDPATH**/ ?>