

<?php $__env->startSection('title'); ?>
Transaksi Penjualan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_class', 'sidebar-collapse'); ?>

<?php $__env->startPush('css'); ?>
<style>
    .tampil-bayar {
        font-size: 2em;
        text-align: center;
        height: 100px;
    }

    .tampil-terbilang {
        padding: 10px;
        background: #f0f0f0;
    }

    .table-penjualan tbody tr.row-total-hide {
        display: none !important;
    }

    .btn-checkout-mobile {
        display: none;
    }

    /* ========================================================
       QUANTITY STEPPER (- [qty] +) & ACTION BUTTONS
       ======================================================== */
    .qty-stepper {
        display: inline-flex !important;
        align-items: stretch !important;
        vertical-align: middle !important;
        border-radius: 8px !important;
        overflow: hidden !important;
        border: 1.5px solid #cbd5e1 !important;
        background: #ffffff !important;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05) !important;
        width: auto !important;
    }

    .qty-stepper .btn-qty-minus,
    .qty-stepper .btn-qty-plus {
        width: 30px !important;
        height: 30px !important;
        padding: 0 !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: #f1f5f9 !important;
        color: #334155 !important;
        border: none !important;
        font-size: 11px !important;
        cursor: pointer !important;
        transition: all 0.15s ease !important;
        outline: none !important;
        user-select: none !important;
    }

    .qty-stepper .btn-qty-minus:hover,
    .qty-stepper .btn-qty-plus:hover {
        background: #e2e8f0 !important;
        color: #0f172a !important;
    }

    .qty-stepper .btn-qty-minus:active,
    .qty-stepper .btn-qty-plus:active {
        background: #cbd5e1 !important;
        transform: scale(0.92) !important;
    }

    .qty-stepper .btn-qty-minus {
        border-right: 1px solid #cbd5e1 !important;
    }

    .qty-stepper .btn-qty-plus {
        border-left: 1px solid #cbd5e1 !important;
    }

    .qty-stepper .quantity {
        width: 44px !important;
        height: 30px !important;
        padding: 0 2px !important;
        font-size: 13.5px !important;
        font-weight: 800 !important;
        color: #0f172a !important;
        text-align: center !important;
        border: none !important;
        border-radius: 0 !important;
        background: #ffffff !important;
        box-shadow: none !important;
        outline: none !important;
    }

    .qty-stepper .quantity:focus {
        background: #f0fdf4 !important;
    }

    /* Delete Button with Trash Icon */
    .btn-delete-item {
        width: 32px !important;
        height: 32px !important;
        border-radius: 8px !important;
        padding: 0 !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: #fee2e2 !important;
        color: #dc2626 !important;
        border: 1px solid #fecaca !important;
        font-size: 14px !important;
        cursor: pointer !important;
        transition: all 0.15s ease !important;
    }

    .btn-delete-item:hover {
        background: #fecaca !important;
        color: #991b1b !important;
        border-color: #fca5a5 !important;
    }

    .btn-delete-item:active {
        background: #ef4444 !important;
        color: #ffffff !important;
        transform: scale(0.92) !important;
    }

    .table-penjualan thead th:nth-child(8),
    .table-penjualan tbody td:nth-child(8) {
        text-align: center !important;
        vertical-align: middle !important;
    }

    @media(max-width: 991px) {
        .tampil-bayar {
            font-size: 1.8em;
            height: auto;
            min-height: 60px;
            padding: 12px;
        }

        #form-bayar-container {
            display: block !important;
            margin-top: 15px;
        }
    }

    @media(max-width: 767px) {
        html, body {
            overflow-x: hidden !important;
            max-width: 100vw !important;
            width: 100% !important;
        }

        .wrapper {
            overflow-x: hidden !important;
            max-width: 100vw !important;
        }

        body.sidebar-collapse .main-header .navbar,
        .main-header .navbar {
            margin-left: 0 !important;
            width: 100% !important;
            max-width: 100vw !important;
        }

        body.sidebar-collapse .content-wrapper,
        body.sidebar-collapse .main-footer,
        .content-wrapper,
        .main-footer {
            margin-left: 0 !important;
            margin-top: 52px !important;
            width: 100% !important;
            max-width: 100vw !important;
            overflow-x: hidden !important;
        }

        .content {
            padding: 8px 6px 20px 6px !important;
            width: 100% !important;
            max-width: 100vw !important;
            overflow-x: hidden !important;
        }

        .box {
            border: none !important;
            box-shadow: none !important;
            background: transparent !important;
            margin-bottom: 8px !important;
            overflow-x: hidden !important;
            width: 100% !important;
            max-width: 100% !important;
        }

        .tampil-bayar {
            font-size: clamp(1.4rem, 4.5vw, 2.2rem) !important;
            height: auto;
            min-height: 52px;
            padding: 10px 14px;
        }

        #form-bayar-container {
            display: block !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        #form-bayar-container > [class*="col-"] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .content > .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .content > .row > [class*="col-"] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .pos-box-body {
            padding: 10px 8px 16px 8px !important;
        }

        .pos-box-body > .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .pos-box-body > .row > [class*="col-"] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* ========================================================
           MOBILE CART: Modern Native POS Card Layout (< 768px)
           CSS Grid ensures cards NEVER cut off, and delete button
           is ALWAYS right-aligned & vertically centered!
           ======================================================== */
        .content-header {
            display: none !important;
        }

        .table-responsive {
            width: 100% !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
            overflow-y: auto !important;
            max-height: 380px !important;
            -webkit-overflow-scrolling: touch !important;
            border: none !important;
            background: transparent !important;
            margin-bottom: 12px !important;
            padding: 2px 0 !important;
        }

        .table-responsive .table.table-penjualan,
        .table-penjualan,
        table#tabel-produk,
        #tabel-produk_wrapper {
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            box-sizing: border-box !important;
            border: none !important;
            background: transparent !important;
            margin: 0 !important;
        }

        /* Sembunyikan thead tabel pada mobile karena tiap item adalah kartu */
        .table-penjualan thead {
            display: none !important;
        }

        .table-penjualan tbody {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
        }

        /* Kartu Produk Kasir Modern per Item (CSS Grid) */
        .table-penjualan tbody tr:not(.row-total-hide) {
            display: grid !important;
            grid-template-columns: auto 1fr 42px !important;
            grid-template-rows: auto auto auto !important;
            align-items: center !important;
            row-gap: 5px !important;
            column-gap: 8px !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            background: #ffffff !important;
            border: 1.5px solid #e2e8f0 !important;
            border-radius: 14px !important;
            padding: 12px !important;
            margin-bottom: 8px !important;
            box-shadow: 0 1px 3px rgba(15, 23, 42, 0.04) !important;
            box-sizing: border-box !important;
            transition: all 0.2s ease !important;
        }

        .table-penjualan tbody tr:not(.row-total-hide):active {
            border-color: #cbd5e1 !important;
            background: #f8fafc !important;
        }

        /* Kolom yang tidak diperlukan di mobile */
        .table-penjualan tbody tr td:nth-child(1),
        .table-penjualan tbody tr td:nth-child(2),
        .table-penjualan tbody tr td:nth-child(6) {
            display: none !important; /* No, Kode, Diskon */
        }

        /* Nama Produk: Baris 1, rentang Kolom 1-2 */
        .table-penjualan tbody tr td:nth-child(3) {
            grid-column: 1 / 3 !important;
            grid-row: 1 !important;
            display: block !important;
            width: 100% !important;
            padding: 0 !important;
            border: none !important;
            font-size: 13.5px !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            line-height: 1.35 !important;
            word-break: break-word !important;
            background: transparent !important;
        }

        /* Harga Satuan: Baris 2, rentang Kolom 1-2 */
        .table-penjualan tbody tr td:nth-child(4) {
            grid-column: 1 / 3 !important;
            grid-row: 2 !important;
            display: block !important;
            width: 100% !important;
            padding: 0 0 6px 0 !important;
            border: none !important;
            border-bottom: 1px dashed #e2e8f0 !important;
            font-size: 11.5px !important;
            font-weight: 500 !important;
            color: #64748b !important;
            background: transparent !important;
            text-align: left !important;
        }

        /* Qty Stepper: Baris 3, Kolom 1 (Kiri Bawah) */
        .table-penjualan tbody tr td:nth-child(5) {
            grid-column: 1 !important;
            grid-row: 3 !important;
            display: inline-flex !important;
            align-items: center !important;
            padding: 0 !important;
            border: none !important;
            background: transparent !important;
            white-space: nowrap !important;
        }

        .table-penjualan tbody tr td:nth-child(5)::before {
            content: "Qty:" !important;
            font-size: 12px !important;
            font-weight: 700 !important;
            color: #64748b !important;
            margin-right: 8px !important;
        }

        .table-penjualan tbody tr td:nth-child(5) .qty-stepper {
            display: inline-flex !important;
            border: 1.5px solid #cbd5e1 !important;
            border-radius: 8px !important;
        }

        .table-penjualan tbody tr td:nth-child(5) .qty-stepper .btn-qty-minus,
        .table-penjualan tbody tr td:nth-child(5) .qty-stepper .btn-qty-plus {
            width: 30px !important;
            height: 30px !important;
            font-size: 12px !important;
            background: #f1f5f9 !important;
            color: #1e293b !important;
        }

        .table-penjualan tbody tr td:nth-child(5) .qty-stepper .quantity {
            width: 44px !important;
            height: 30px !important;
            font-size: 13.5px !important;
            font-weight: 800 !important;
        }

        /* Subtotal: Baris 3, Kolom 2 (Tengah/Kanan Bawah) */
        .table-penjualan tbody tr td:nth-child(7) {
            grid-column: 2 !important;
            grid-row: 3 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: flex-end !important;
            padding: 0 4px 0 0 !important;
            border: none !important;
            font-size: 14.5px !important;
            font-weight: 800 !important;
            color: #4f46e5 !important;
            text-align: right !important;
            background: transparent !important;
            white-space: nowrap !important;
        }

        /* Tombol Hapus: Kolom 3, Rentang Baris 1-3 (RATA KANAN & CENTER VERTIKAL) */
        .table-penjualan tbody tr td:nth-child(8) {
            grid-column: 3 !important;
            grid-row: 1 / 4 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            align-self: center !important;
            justify-self: center !important;
            width: 42px !important;
            height: 100% !important;
            min-height: 40px !important;
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
            background: transparent !important;
            position: static !important;
            transform: none !important;
            z-index: 5 !important;
        }

        .table-penjualan tbody tr td:nth-child(8) .btn-delete-item,
        .table-penjualan tbody tr td:nth-child(8) .btn-danger {
            width: 38px !important;
            height: 38px !important;
            border-radius: 10px !important;
            padding: 0 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            background: #fee2e2 !important;
            color: #dc2626 !important;
            border: 1.5px solid #fecaca !important;
            font-size: 15px !important;
            cursor: pointer !important;
            transition: all 0.15s ease !important;
            box-shadow: 0 1px 3px rgba(220, 38, 38, 0.12) !important;
        }

        .table-penjualan tbody tr td:nth-child(8) .btn-delete-item:hover,
        .table-penjualan tbody tr td:nth-child(8) .btn-danger:hover {
            background: #ef4444 !important;
            color: #ffffff !important;
            border-color: #ef4444 !important;
        }

        .table-penjualan tbody tr td:nth-child(8) .btn-delete-item:active,
        .table-penjualan tbody tr td:nth-child(8) .btn-danger:active {
            background: #dc2626 !important;
            color: #ffffff !important;
            transform: scale(0.92) !important;
        }

        /* Keranjang Kosong di Mobile */
        .table-penjualan tbody tr:has(.dataTables_empty) {
            display: block !important;
            border: none !important;
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .table-penjualan tbody tr td.dataTables_empty {
            grid-column: 1 / -1 !important;
            grid-row: 1 !important;
            display: block !important;
            width: 100% !important;
            background: #ffffff !important;
            border: 1.5px dashed #cbd5e1 !important;
            border-radius: 12px !important;
            padding: 24px 16px !important;
            text-align: center !important;
            box-sizing: border-box !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .table-penjualan thead th:nth-child(1),
        .table-penjualan tbody td:nth-child(1),
        .table-penjualan thead th:nth-child(2),
        .table-penjualan tbody td:nth-child(2) {
            display: none !important; /* Hide No & Kode on tablet */
        }
        .table-responsive {
            overflow-x: hidden !important;
        }
    }

    /* Modern Barcode & Product Search Bar */
    .barcode-search-box {
        display: flex;
        align-items: stretch;
        height: 44px;
        background: #ffffff;
        border: 1.5px solid #cbd5e1;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        transition: all 0.2s ease;
        width: 100%;
    }

    .barcode-search-box:focus-within {
        border-color: #4f46e5;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15), 0 2px 8px rgba(79, 70, 229, 0.08);
    }

    .barcode-icon-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        background: #f8fafc;
        border-right: 1.5px solid #cbd5e1;
        color: #4f46e5;
        font-size: 20px;
        flex-shrink: 0;
        transition: all 0.2s ease;
        user-select: none;
    }

    .barcode-search-box:focus-within .barcode-icon-box {
        background: #eef2ff;
        color: #4338ca;
        border-right-color: #4f46e5;
    }

    .barcode-input-field {
        flex: 1 1 0% !important;
        min-width: 0 !important;
        width: 100% !important;
        height: 100% !important;
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
        padding: 0 16px !important;
        font-size: 14px !important;
        font-weight: 500;
        color: #0f172a !important;
        background: transparent !important;
        margin: 0 !important;
    }

    .barcode-input-field::placeholder {
        color: #94a3b8;
        font-weight: 400;
    }

    .barcode-search-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        height: 100% !important;
        padding: 0 22px !important;
        background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%) !important;
        color: #ffffff !important;
        font-weight: 700 !important;
        font-size: 13.5px !important;
        border: none !important;
        outline: none !important;
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.2s ease;
        flex-shrink: 0;
        margin: 0 !important;
        box-shadow: none !important;
    }

    .barcode-search-btn:hover {
        background: linear-gradient(135deg, #4338ca 0%, #4f46e5 100%) !important;
        color: #ffffff !important;
    }

    .barcode-search-btn:active {
        background: #3730a3 !important;
    }

    .barcode-search-btn i {
        font-size: 13.5px;
    }

    @media (max-width: 576px) {
        .barcode-search-btn .search-btn-label {
            display: none !important;
        }
        .barcode-search-btn {
            padding: 0 16px !important;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('breadcrumb'); ?>
<li class="active">Transaksi Penjualan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body pos-box-body">

                <!-- Barcode & Search Input -->
                <div class="row" style="margin-bottom: 12px;">
                    <div class="col-lg-6 col-md-8 col-xs-12">
                        <form class="form-produk" id="form-produks">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_penjualan" id="id_penjualan" value="<?php echo e($id_penjualan); ?>">
                            <input type="hidden" name="id_produk_level_harga" id="id_produk_level_harga">
                            <input type="hidden" name="id_produk_level" id="id_produk_level">
                            <input type="hidden" name="id_produk" id="id_produk">
                            <input type="hidden" name="harga_type" id="harga_type">
                            <input type="hidden" name="harga_jual" id="harga_jual">
                            <input type="hidden" name="id_pembelian_detail" id="id_pembelian_detail_produk">
                            <div class="barcode-search-box">
                                <span class="barcode-icon-box">
                                    <i class="fa fa-barcode"></i>
                                </span>
                                <input type="text" class="barcode-input-field" name="kode_produk" id="kode_produk" placeholder="Scan barcode / kode / nama..." autocomplete="off">
                                <button onclick="tampilProduk()" class="barcode-search-btn" type="button" title="Pilih Produk">
                                    <i class="fa fa-search"></i>
                                    <span class="search-btn-label">Pilih Produk</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-4 text-right hidden-xs">
                        <span class="badge" style="background:#e0e7ff; color:#4338ca; font-size:13px; padding:8px 14px; border-radius:9999px;">
                            <i class="fa fa-shopping-basket"></i> ID Transaksi: #<?php echo e($id_penjualan); ?>

                        </span>
                    </div>
                </div>

                <!-- Product Cart Table -->
                <div class="table-responsive" style="margin-bottom: 16px;">
                    <table class="table table-striped table-bordered table-penjualan" id="tabel-produk">
                        <thead>
                            <th width="5%">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Satuan</th>
                            <th width="15%" class="text-center">Jumlah</th>
                            <th>Diskon</th>
                            <th>Subtotal</th>
                            <th width="10%" class="text-center"><i class="fa fa-cog"></i></th>
                        </thead>
                    </table>
                </div>

                <!-- Modern POS Payment Container -->
                <div id="form-bayar-container" class="row">
                    <!-- Left: Modern POS Total Tagihan Display -->
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="pos-total-display-card">
                            <div class="pos-total-header">
                                <span class="pos-total-badge"><i class="fa fa-calculator"></i> Total Tagihan</span>
                                <span class="pos-total-amount tampil-bayar-text">Rp. 0</span>
                            </div>
                            <div class="tampil-terbilang-text">Nol Rupiah</div>
                            <!-- Hidden elements for backward compatibility -->
                            <div class="tampil-bayar" style="display:none;"></div>
                            <div class="tampil-terbilang" style="display:none;"></div>
                        </div>
                    </div>

                    <!-- Right: Modern Compact Payment Card -->
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="pos-payment-card">
                            <form action="<?php echo e(route('transaksi.simpan')); ?>" class="form-penjualan" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id_penjualan" value="<?php echo e($id_penjualan); ?>">
                                <input type="hidden" name="id_pembelian_detail" id="id_pembelian_detail">
                                <input type="hidden" name="total" id="total">
                                <input type="hidden" name="total_item" id="total_item">
                                <input type="hidden" name="bayar" id="bayar">
                                <input type="hidden" name="harga_type" id="harga_type">
                                <input type="hidden" name="id_member" id="id_member" value="<?php echo e($memberSelected->id_member); ?>">

                                <!-- Total Belanja & Diskon in 1 Row -->
                                <div class="row" style="margin-left:-6px; margin-right:-6px; margin-bottom:10px;">
                                    <div class="col-xs-6" style="padding-left:6px; padding-right:6px;">
                                        <label class="control-label-pos">Total Belanja</label>
                                        <input type="text" id="totalrp" class="form-control pos-input-sm" style="font-weight:700; background:#f8fafc;" readonly>
                                    </div>
                                    <div class="col-xs-6" style="padding-left:6px; padding-right:6px;">
                                        <label class="control-label-pos">Diskon (%)</label>
                                        <input type="number" name="diskon" id="diskon" class="form-control pos-input-sm" value="0" min="0" max="100">
                                    </div>
                                </div>

                                <div class="form-group row" style="display: none;">
                                    <label for="kode_member" class="col-lg-3 control-label">Member</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="kode_member" value="<?php echo e($memberSelected->kode_member); ?>">
                                            <span class="input-group-btn">
                                                <button onclick="tampilMember()" class="btn btn-info btn-flat" type="button"><i class="fa fa-arrow-right"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row" style="display: none;">
                                    <label for="bayar" class="col-lg-3 control-label">Bayar</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="bayarrp" class="form-control" readonly>
                                    </div>
                                </div>

                                <!-- Metode Pembayaran -->
                                <div class="form-group" style="margin-bottom:10px;">
                                    <label class="control-label-pos">Metode Pembayaran</label>
                                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-control pos-input-sm">
                                        <option value="cash" selected>💵 Tunai / Cash</option>
                                        <option value="qris">📱 QRIS (Digital Pay)</option>
                                    </select>
                                </div>

                                <!-- QRIS Image (hidden by default) -->
                                <div class="form-group text-center d-none" id="field-qris" style="margin-bottom:10px;">
                                    <img src="<?php echo e(asset('img/qris.png')); ?>" style="max-width:180px; border-radius:10px; border:1px solid #e2e8f0; padding:6px; background:#fff;">
                                </div>

                                <!-- Cash Received & Quick Chips -->
                                <div id="field-cash">
                                    <div class="form-group" style="margin-bottom:6px;">
                                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:3px;">
                                            <label for="diterima_display" class="control-label-pos" style="margin:0;">Uang Diterima</label>
                                            <button type="button" class="btn-pas-shortcut" onclick="setNominalPas()">Uang Pas</button>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="font-weight:700; font-size:12px; background:#f8fafc; padding:0 10px;">Rp</span>
                                            <input type="text" id="diterima_display" class="form-control pos-input-cash" value="0">
                                        </div>
                                        <input type="hidden" id="diterima" name="diterima" value="0">
                                    </div>

                                    <!-- Quick Cash Chips -->
                                    <div class="quick-cash-row">
                                        <button type="button" class="cash-chip" onclick="setNominal(10000)">10rb</button>
                                        <button type="button" class="cash-chip" onclick="setNominal(20000)">20rb</button>
                                        <button type="button" class="cash-chip" onclick="setNominal(50000)">50rb</button>
                                        <button type="button" class="cash-chip" onclick="setNominal(100000)">100rb</button>
                                    </div>

                                    <!-- Kembalian Display -->
                                    <div class="kembalian-display-box">
                                        <span class="kembalian-title">Kembalian:</span>
                                        <input type="text" id="kembali" name="kembali" class="kembalian-text-input" value="Rp. 0" readonly>
                                    </div>
                                </div>

                                <!-- Submit Button directly inside card -->
                                <button type="submit" class="btn btn-success btn-block btn-simpan-pos btn-simpan">
                                    <i class="fa fa-check-circle"></i> Selesaikan Transaksi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php if ($__env->exists('penjualan_detail.produk')) echo $__env->make('penjualan_detail.produk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if ($__env->exists('penjualan_detail.member')) echo $__env->make('penjualan_detail.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    let table, table2;
    $(function() {
        $('body').addClass('sidebar-collapse');

        table = $('.table-penjualan').DataTable({
            processing: true,
            autoWidth: false,
            ajax: '<?php echo e(route("transaksi.data", $id_penjualan)); ?>',
            columns: [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    sortable: false
                },
                {
                    data: 'kode_produk'
                },
                {
                    data: 'nama_produk'
                },
                {
                    data: 'harga_jual_eceran'
                },
                {
                    data: 'jumlah'
                },
                {
                    data: 'diskon'
                },
                {
                    data: 'subtotal'
                },
                {
                    data: 'aksi',
                    searchable: false,
                    sortable: false
                },
            ],
            dom: 'Brt',
            bSort: false,
            paginate: false,
            language: {
                emptyTable: "<div class='pos-empty-cart'><i class='fa fa-shopping-basket'></i><p>Keranjang Masih Kosong</p><small>Scan barcode atau tekan tombol Pilih Produk di atas</small></div>"
            }
        }).on('draw.dt', function() {
            table.columns.adjust();
            if ($(window).width() < 768) {
                $('#tabel-produk').css({
                    'width': '100%',
                    'max-width': '100%',
                    'min-width': '0'
                });
            }
            // cek ulang quantity setelah reload
            $('.quantity').each(function(){
                let decimal = $(this).data('decimal');
                let val = $(this).val();

                if(decimal == 0){
                    // hapus decimal
                    val = parseInt(val) || 0;
                    $(this).val(val);
                }
            });

            loadForm($('#diskon').val());
            setTimeout(() => $('#diterima_display').trigger('input'), 300);
        });

        setTimeout(function() {
            table.columns.adjust();
        }, 150);

        table2 = $('.table-produk').DataTable();

       $(document).on('input', '.quantity', function () {

    let id = $(this).data('id');
    let stok = parseFloat($(this).data('stok'));
    let decimal = $(this).data('decimal');

    let val = $(this).val();

    // =============================
    // VALIDASI DECIMAL
    // =============================
    if (decimal == 1) {

        // boleh decimal
        val = val.replace(/[^0-9.]/g, '');

        // hanya boleh satu titik
        let parts = val.split('.');
        if (parts.length > 2) {
            val = parts[0] + '.' + parts[1];
        }

    } else {

        // hanya integer (hapus titik dan karakter lain)
        val = val.replace(/\D/g, '');

    }

    $(this).val(val);

    let jumlah = decimal == 1 ? parseFloat(val) : parseInt(val);

    // Jika kosong
    if (!jumlah || jumlah <= 0) {
        return;
    }

    // Batasi max
    if (jumlah > 10000) {
        alert('Jumlah maksimal 10000');
        $(this).val(decimal == 1 ? '10000' : '10000');
        return;
    }

    // Cek stok
    let konversi = parseFloat($(this).data('konversi')) || 1;
    let stokFisik = parseFloat($(this).data('stok')) || 0;
    let maxBisa = konversi > 0 ? Math.floor(stokFisik / konversi) : 0;

    if (jumlah * konversi > stokFisik) {
        alert('Stok tidak mencukupi! Sisa stok fisik: ' + stokFisik + (maxBisa > 0 ? ' (Maksimal: ' + maxBisa + ' untuk satuan ini)' : ' (Stok kosong)'));
        $(this).val(decimal == 1 ? maxBisa : Math.floor(maxBisa));
        table.ajax.reload();
        return;
    }

    // =============================
    // UPDATE SERVER
    // =============================
    $.post(`<?php echo e(url('/transaksi')); ?>/${id}`, {
        '_token': $('[name=csrf-token]').attr('content'),
        '_method': 'put',
        'jumlah': jumlah
    }).done(() => {

        table.ajax.reload(() => loadForm($('#diskon').val()));

    }).fail((xhr) => {

        alert(xhr.responseJSON?.message ?? 'Tidak dapat menyimpan data');
        table.ajax.reload();

    });

});

        // =============================
        // STEPPER TOMBOL + DAN -
        // =============================
        $(document).on('click', '.btn-qty-plus', function(e) {
            e.preventDefault();
            let $stepper = $(this).closest('.qty-stepper');
            let $input = $stepper.find('.quantity');
            if (!$input.length) {
                $input = $(this).closest('tr').find('.quantity');
            }
            let currentVal = parseFloat($input.val()) || 0;
            let step = 1;
            let newVal = currentVal + step;
            $input.val(newVal).trigger('input');
        });

        $(document).on('click', '.btn-qty-minus', function(e) {
            e.preventDefault();
            let $stepper = $(this).closest('.qty-stepper');
            let $input = $stepper.find('.quantity');
            if (!$input.length) {
                $input = $(this).closest('tr').find('.quantity');
            }
            let currentVal = parseFloat($input.val()) || 0;
            let step = 1;
            let newVal = currentVal - step;

            if (newVal <= 0) {
                let id = $input.data('id');
                deleteData(`<?php echo e(url('/transaksi')); ?>/${id}`);
                return;
            }

            $input.val(newVal).trigger('input');
        });

        $('#diskon').on('input', function() {
            if ($(this).val() == "") $(this).val(0).select();
            loadForm($(this).val());
        });

        $('#diterima_display').on('input', function() {
            let val = $(this).val().replace(/[^0-9]/g, '');
            let nominal = val ? parseInt(val, 10) : 0;
            $('#diterima').val(nominal);
            $(this).val(val ? formatRupiah(val) : '');
            loadForm($('#diskon').val(), nominal);
        }).focus(function() {
            $(this).select();
        });

        $('.form-penjualan').on('submit', function(e) {
            let totalItem = parseInt($('#total_item').val(), 10) || 0;
            let total = parseFloat($('#total').val()) || 0;
            let bayar = parseFloat($('#bayar').val()) || 0;
            let metode = $('#metode_pembayaran').val();
            let diterima = parseFloat($('#diterima').val()) || 0;

            if (totalItem <= 0 || total <= 0) {
                e.preventDefault();
                alert('Keranjang belanja masih kosong! Silakan pilih produk terlebih dahulu.');
                return false;
            }

            if (metode === 'cash' && diterima < bayar) {
                e.preventDefault();
                alert('Uang yang diterima kurang dari total bayar!');
                $('#diterima_display').focus().select();
                return false;
            }

            if (metode === 'qris') {
                $('#diterima').val(bayar);
            }
        });

        $('#form-produks').on('submit', function(e) {
            e.preventDefault();
            tampilProduk();
        });
    });

    function tampilProduk() {
        let kode = $('#kode_produk').val().trim();
        $('#modal-produk').modal('show');
        if (kode) {
            setTimeout(function() {
                $('#searchInput').val(kode).trigger('input');
            }, 300);
        }
    }

    function hideProduk() {
        $('#modal-produk').modal('hide');
    }

    function tampilMember() {
        $('#modal-member').modal('show');
    }

    function hideMember() {
        $('#modal-member').modal('hide');
    }

    function toggleCheckout() {
        const $produkForm = $('#form-produks');
        const $produkTable = $('#tabel-produk');
        const $formBayar = $('#form-bayar-container');
        const $button = $('#btn-toggle-checkout');

        if ($produkTable.is(':hidden')) {
            $produkForm.show();
            $produkTable.show();
            $formBayar.hide();
            $button.text('Checkout')
                .removeClass('btn-danger')
                .addClass('btn-success');
            $('#box-footer').hide();
        } else {
            $('#box-footer').show();
            $produkForm.hide();
            $produkTable.hide();
            $formBayar.show();
            $button.text('Kembali ke Produk')
                .removeClass('btn-success')
                .addClass('btn-danger');

            // $('#diterima_display').focus();
        }
    }

    function pilihProduk(id, kode, type, harga_jual, id_produk_level, id_produk_level_harga, idpembeliandetail) {
        $('#id_produk').val(id);
        if (!$('#harga_type').length) {
            $('#form-produks').append(`<input type="hidden" name="harga_type" id="harga_type">`);
        }
        if (!$('#harga_jual').length) {
            $('#form-produks').append(`<input type="hidden" name="harga_jual" id="harga_jual">`);
        }
        if (!$('#id_pembelian_detail_produk').length) {
            $('#form-produks').append(`<input type="hidden" name="id_pembelian_detail" id="id_pembelian_detail_produk">`);
        }
        $('#harga_type').val(type);
        $('#harga_jual').val(harga_jual);
        $('#id_produk_level_harga').val(id_produk_level_harga);
        $('#id_produk_level').val(id_produk_level);
        $('#id_pembelian_detail_produk').val(idpembeliandetail);
        hideProduk();
        tambahProduk();
    }

    function tambahProduk() {
        $.post('<?php echo e(route('transaksi.store')); ?>', $('.form-produk').serialize())
            .done(() => {
                table.ajax.reload(() => loadForm($('#diskon').val()));
            })
            .fail(() => alert('Tidak dapat menyimpan data'));
    }

    function pilihMember(id, kode) {
        $('#id_member').val(id);
        $('#kode_member').val(kode);
        $('#diskon').val('<?php echo e($diskon); ?>');
        loadForm($('#diskon').val());
        $('#diterima_display').val('0').focus().select();
        hideMember();
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                '_token': $('[name=csrf-token]').attr('content'),
                '_method': 'delete'
            }).done(() => {
                table.ajax.reload(() => loadForm($('#diskon').val()));
            }).fail(() => alert('Tidak dapat menghapus data'));
        }
    }

    function loadForm(diskon = 0, diterima = null) {
        if (diterima === null || diterima === undefined) {
            diterima = $('#diterima').val() || 0;
        }

        let totalVal = '0';
        let totalItemVal = '0';

        // 1. Ambil langsung dari response JSON DataTables jika ada
        if (typeof table !== 'undefined' && table && typeof table.ajax.json === 'function') {
            let json = table.ajax.json();
            if (json && typeof json.total !== 'undefined' && json.total !== null) {
                totalVal = String(json.total);
                totalItemVal = (json.total_item !== undefined && json.total_item !== null) ? String(json.total_item) : '0';
            }
        }

        // 2. Fallback jika json belum ada: ambil dari dummy row di dalam tabel
        if (totalVal === '0') {
            let domTotal = $('.table-penjualan tbody .total').text().trim();
            let domTotalItem = $('.table-penjualan tbody .total_item').text().trim();
            if (domTotal) totalVal = domTotal;
            if (domTotalItem) totalItemVal = domTotalItem;
        }

        $('#total').val(totalVal);
        $('#total_item').val(totalItemVal);

        $.get(`<?php echo e(url('/transaksi/loadform')); ?>/${diskon}/${totalVal}/${diterima}`)
            .done(response => {
                $('#totalrp').val('Rp. ' + response.totalrp);
                $('#bayarrp').val('Rp. ' + response.bayarrp);
                $('#bayar').val(response.bayar);
                $('.tampil-bayar').text('Bayar: Rp. ' + response.bayarrp);
                $('.tampil-bayar-text').text('Rp. ' + response.bayarrp);
                $('.tampil-terbilang').text(response.terbilang);
                $('.tampil-terbilang-text').text(response.terbilang);
                $('#kembali').val('Rp. ' + response.kembalirp);
            }).fail(() => alert('Tidak dapat menampilkan data'));
    }

    function setNominalPas() {
        let bayar = $('#bayar').val() || 0;
        $('#diterima_display').val(formatRupiah(bayar.toString()));
        $('#diterima').val(bayar);
        loadForm($('#diskon').val(), bayar);
    }

    function setNominal(amount) {
        $('#diterima_display').val(formatRupiah(amount.toString()));
        $('#diterima').val(amount);
        loadForm($('#diskon').val(), amount);
    }

    function formatRupiah(angka, prefix = 'Rp. ') {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
    }

    function toggleMetodePembayaran() {
        let metode = $('#metode_pembayaran').val();

        if (metode === 'qris') {
            $('#field-cash').hide();
            $('#field-qris').show();

            // otomatis bayar pas
            let total = $('#bayar').val() || 0;
            $('#diterima').val(total);
            loadForm($('#diskon').val(), total);

        } else {
            $('#field-cash').show();
            $('#field-qris').hide();
        }
    }

    $('#metode_pembayaran').on('change', function() {
        toggleMetodePembayaran();
    });

    toggleMetodePembayaran(); // jalankan saat load
</script>
<?php if(session('success')): ?>
<script>
    alert("<?php echo e(session('success')); ?>");
</script>
<?php endif; ?>

<?php if(session('error')): ?>
<script>
    alert("<?php echo e(session('error')); ?>");
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\pos\resources\views/penjualan_detail/index.blade.php ENDPATH**/ ?>