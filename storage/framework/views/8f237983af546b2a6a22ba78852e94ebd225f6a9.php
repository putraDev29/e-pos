<style>
    .modal-pos-produk .modal-dialog {
        width: 92% !important;
        max-width: 1020px;
        margin: 20px auto;
    }

    .modal-pos-produk .modal-content {
        border-radius: 16px;
        overflow: hidden;
        border: none;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .modal-pos-produk .modal-header {
        background: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        padding: 14px 22px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 14px;
    }

    /* Tombol X Rata Kiri */
    .btn-close-left {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #f1f5f9;
        border: 1px solid #cbd5e1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.2s ease;
        padding: 0;
        line-height: 1;
        outline: none !important;
        flex-shrink: 0;
    }

    .btn-close-left:hover {
        background: #fee2e2;
        border-color: #fca5a5;
        color: #ef4444;
        transform: scale(1.05);
    }

    .modal-pos-produk .modal-title {
        font-size: 16.5px;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .modal-pos-search-wrapper {
        position: relative;
        margin-bottom: 14px;
    }

    .modal-pos-search-wrapper .fa-search {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 14px;
    }

    #searchInput {
        padding-left: 40px;
        height: 42px;
        border-radius: 10px;
        border: 1px solid #cbd5e1;
        font-size: 13.5px;
        background: #f8fafc;
        transition: all 0.2s ease;
    }

    #searchInput:focus {
        background: #ffffff;
        border-color: #4f46e5;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.12);
    }

    /* Grid Produk: Card Kecil Modern (Desktop 4 Kolom, Tablet 3 Kolom, Mobile 2 Kolom) */
    .pos-product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
        padding: 2px;
        min-height: auto;
    }

    /* Card Produk Ringkas & Kecil (Compact) */
    .pos-product-card {
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        border-radius: 10px;
        padding: 7px 8px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.15s ease;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
        position: relative;
    }

    .pos-product-card:hover {
        border-color: #818cf8;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px -2px rgba(79, 70, 229, 0.15);
    }

    .pos-product-card.out-of-stock {
        opacity: 0.72;
        background: #fafafa;
    }

    .pos-img-container {
        width: 100%;
        height: 115px;
        background: #f8fafc;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-bottom: 6px;
        border: 1px solid #f1f5f9;
        padding: 4px;
        box-sizing: border-box;
    }

    .pos-img-container img {
        max-height: 105px;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        transition: transform 0.2s ease;
    }

    .pos-product-card:hover .pos-img-container img {
        transform: scale(1.06);
    }

    .pos-product-meta {
        margin-bottom: 4px;
    }

    .pos-meta-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 4px;
        margin-bottom: 3px;
    }

    .pos-product-sku {
        font-family: monospace;
        font-size: 9.5px;
        color: #64748b;
        background: #f1f5f9;
        padding: 1px 4px;
        border-radius: 4px;
        display: inline-block;
        font-weight: 700;
        line-height: 1.2;
    }

    .pos-product-name {
        font-size: 11px;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
        line-height: 1.25;
        height: 28px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .pos-stock-pill {
        display: inline-flex;
        align-items: center;
        gap: 2px;
        font-size: 9.5px;
        font-weight: 700;
        padding: 1px 5px;
        border-radius: 9999px;
        line-height: 1.2;
    }

    .pos-stock-safe {
        background: #dcfce7;
        color: #15803d;
    }

    .pos-stock-low {
        background: #fef3c7;
        color: #b45309;
    }

    .pos-stock-empty {
        background: #fee2e2;
        color: #b91c1c;
    }

    .pos-price-chip-grid {
        display: flex;
        flex-direction: column;
        gap: 3px;
        margin-top: auto;
    }

    .pos-price-btn {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        padding: 3px 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 4px;
        transition: all 0.15s ease;
        text-align: left;
        width: 100%;
        outline: none !important;
    }

    .pos-price-btn:hover:not(:disabled),
    .pos-price-btn:active:not(:disabled) {
        background: #4f46e5 !important;
        border-color: #4f46e5 !important;
        color: #ffffff !important;
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(79, 70, 229, 0.25);
    }

    .pos-price-btn:hover:not(:disabled) .pos-unit-name,
    .pos-price-btn:hover:not(:disabled) .pos-price-num,
    .pos-price-btn:active:not(:disabled) .pos-unit-name,
    .pos-price-btn:active:not(:disabled) .pos-price-num {
        color: #ffffff !important;
    }

    .pos-price-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .pos-unit-name {
        font-size: 9.5px;
        font-weight: 600;
        color: #64748b;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 65px;
    }

    .pos-price-num {
        font-size: 10.5px;
        font-weight: 800;
        color: #0f172a;
        white-space: nowrap;
    }

    /* Pagination Bar */
    .modal-pos-pagination {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #e2e8f0;
    }

    .pagination-info {
        font-size: 12px;
        color: #64748b;
    }

    .modal-pos-pagination .pagination {
        margin: 0;
        display: inline-flex;
        gap: 2px;
    }

    .modal-pos-pagination .pagination > li > a,
    .modal-pos-pagination .pagination > li > span {
        border-radius: 6px !important;
        margin: 0 1px;
        color: #475569;
        border: 1px solid #cbd5e1;
        font-weight: 600;
        font-size: 11.5px;
        padding: 4px 9px;
        transition: all 0.15s ease;
        text-decoration: none !important;
    }

    .modal-pos-pagination .pagination > li > a:hover {
        background: #f1f5f9;
        color: #1e1b4b;
        border-color: #94a3b8;
    }

    .modal-pos-pagination .pagination > .active > a,
    .modal-pos-pagination .pagination > .active > span {
        background: #4f46e5 !important;
        border-color: #4f46e5 !important;
        color: #ffffff !important;
        box-shadow: 0 2px 5px rgba(79, 70, 229, 0.35);
    }

    .modal-pos-pagination .pagination > .disabled > a,
    .modal-pos-pagination .pagination > .disabled > span {
        color: #cbd5e1 !important;
        background: #f8fafc !important;
        border-color: #e2e8f0 !important;
        cursor: not-allowed;
    }

    @media (max-width: 991px) {
        .modal-pos-produk .modal-dialog {
            width: 95% !important;
            margin: 12px auto !important;
        }
        .pos-product-grid {
            grid-template-columns: repeat(3, 1fr) !important;
            gap: 7px !important;
            min-height: auto !important;
        }
    }

    @media (max-width: 767px) {
        .modal-pos-produk .modal-dialog {
            width: 96% !important;
            margin: 6px auto !important;
        }
        .modal-pos-produk .modal-header {
            padding: 8px 12px !important;
        }
        .modal-pos-produk .modal-body {
            padding: 10px 8px !important;
            max-height: calc(100vh - 100px) !important;
        }
        .pos-product-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 6px !important;
            min-height: auto !important;
        }
        .pos-img-container {
            height: 105px !important;
            margin-bottom: 5px !important;
            padding: 4px !important;
        }
        .pos-img-container img {
            max-height: 96px !important;
        }
        .modal-pos-pagination {
            flex-direction: column !important;
            align-items: center !important;
            gap: 6px !important;
        }
    }
</style>

<div class="modal fade modal-pos-produk" id="modal-produk" tabindex="-1" role="dialog" aria-labelledby="modal-produk">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Header dengan Tombol X Rata Kiri -->
            <div class="modal-header">
                <button type="button" class="btn-close-left" data-dismiss="modal" aria-label="Close" title="Tutup Modal (Esc)">
                    <i class="fa fa-times"></i>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-th-large text-primary"></i>
                    <span>Pilih Produk Transaksi</span>
                </h4>
                <div class="modal-header-badge hidden-xs" style="margin-left: auto;">
                    <span class="badge" style="background: #e0e7ff; color: #4338ca; font-size: 11.5px; padding: 5px 12px; border-radius: 9999px;">
                        <i class="fa fa-cubes"></i> Total: <?php echo e(count($produk)); ?> Produk
                    </span>
                </div>
            </div>

            <div class="modal-body" style="padding: 16px 22px;">
                <div class="modal-pos-search-wrapper">
                    <i class="fa fa-search"></i>
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama produk atau kode SKU... (Ketik untuk filter cepat)" autocomplete="off">
                </div>

                <!-- Grid 9 Produk -->
                <div class="pos-product-grid" id="produkGrid">
                    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $stokVal = (float) $item->stok_total;
                        $stokFmt = rtrim(rtrim(number_format($stokVal, 1, '.', ''), '0'), '.');
                        $isOutOfStock = ($stokVal <= 0);
                    ?>
                    <div class="pos-product-card <?php echo e($isOutOfStock ? 'out-of-stock' : ''); ?>" 
                         data-nama="<?php echo e(strtolower($item->nama_produk)); ?>"
                         data-kode="<?php echo e(strtolower($item->kode_produk)); ?>"
                         style="display: none;">

                        
                        <div class="pos-img-container">
                            <?php if($item->gambar && file_exists(public_path($item->gambar))): ?>
                                <img src="<?php echo e(asset($item->gambar)); ?>" alt="<?php echo e($item->nama_produk); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('img/no_images.png')); ?>" alt="<?php echo e($item->nama_produk); ?>" onerror="this.src='<?php echo e(asset('img/no_images.png')); ?>'">
                            <?php endif; ?>
                        </div>

                        
                        <div class="pos-product-meta">
                            <div class="pos-meta-header">
                                <span class="pos-product-sku"><?php echo e($item->kode_produk); ?></span>
                                <?php if($isOutOfStock): ?>
                                    <span class="pos-stock-pill pos-stock-empty">
                                        <i class="fa fa-times-circle"></i> Habis
                                    </span>
                                <?php elseif($stokVal < 5): ?>
                                    <span class="pos-stock-pill pos-stock-low">
                                        <i class="fa fa-exclamation-triangle"></i> Sisa <?php echo e($stokFmt); ?>

                                    </span>
                                <?php else: ?>
                                    <span class="pos-stock-pill pos-stock-safe">
                                        <i class="fa fa-check-circle"></i> Stok <?php echo e($stokFmt); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                            <h5 class="pos-product-name" title="<?php echo e($item->nama_produk); ?>"><?php echo e($item->nama_produk); ?></h5>
                        </div>

                        
                        <div class="pos-price-chip-grid">
                            <?php $__currentLoopData = $item->levelHarga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $levelName = $level->level->nama_level ?? $level->nama_level ?? 'Normal';
                                $satuanName = $level->satuan->nama_satuan ?? '';
                                $chipLabel = trim($levelName . ' ' . $satuanName);
                            ?>
                            <button type="button" 
                                    class="pos-price-btn"
                                    <?php echo e($isOutOfStock ? 'disabled title="Stok habis"' : ''); ?>

                                    onclick="pilihProduk(
                                        '<?php echo e($item->id_produk); ?>',
                                        '<?php echo e($item->kode_produk); ?>',
                                        '<?php echo e($level->nama_level); ?>',
                                        '<?php echo e($level->harga_jual); ?>',
                                        '<?php echo e($level->satuan_id); ?>',
                                        '<?php echo e($level->id); ?>'
                                    )">
                                <span class="pos-unit-name"><?php echo e(ucfirst($chipLabel)); ?></span>
                                <span class="pos-price-num">Rp <?php echo e(number_format($level->harga_jual, 0, ',', '.')); ?></span>
                            </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Baris Pagination (12 Produk per Halaman) -->
                <div class="modal-pos-pagination">
                    <div class="pagination-info" id="paginationInfo">
                        Menampilkan <b>1</b> - <b>12</b> dari <b><?php echo e(count($produk)); ?></b> produk
                    </div>
                    <ul class="pagination pagination-sm" id="paginationLinks">
                        <!-- Diisi via JavaScript -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const produkGrid = document.getElementById('produkGrid');
        const allCards = Array.from(document.querySelectorAll('.pos-product-card'));
        const paginationLinks = document.getElementById('paginationLinks');
        const paginationInfo = document.getElementById('paginationInfo');

        const ITEMS_PER_PAGE = 12;
        let currentPage = 1;
        let filteredCards = allCards.slice();

        function renderPagination() {
            const totalItems = filteredCards.length;
            const totalPages = Math.ceil(totalItems / ITEMS_PER_PAGE) || 1;

            if (currentPage > totalPages) currentPage = totalPages;
            if (currentPage < 1) currentPage = 1;

            const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
            const endIndex = Math.min(startIndex + ITEMS_PER_PAGE, totalItems);

            // Sembunyikan semua kartu
            allCards.forEach(card => card.style.display = 'none');

            // Tampilkan kartu untuk halaman ini
            for (let i = startIndex; i < endIndex; i++) {
                if (filteredCards[i]) {
                    filteredCards[i].style.display = 'flex';
                }
            }

            // Teks informasi jumlah produk
            if (totalItems === 0) {
                if (paginationInfo) paginationInfo.innerHTML = '<span class="text-danger"><i class="fa fa-info-circle"></i> Tidak ada produk yang cocok</span>';
            } else {
                if (paginationInfo) paginationInfo.innerHTML = `Menampilkan <b>${startIndex + 1}</b> - <b>${endIndex}</b> dari <b>${totalItems}</b> produk`;
            }

            // Render tombol pagination
            if (!paginationLinks) return;

            let html = '';

            // Tombol Previous
            if (currentPage > 1) {
                html += `<li><a href="javascript:void(0)" data-page="${currentPage - 1}" title="Sebelumnya">&laquo;</a></li>`;
            } else {
                html += `<li class="disabled"><span>&laquo;</span></li>`;
            }

            // Batasi halaman yang tampil di sekitar halaman aktif (maksimal 5 nomor)
            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, currentPage + 2);

            if (startPage > 1) {
                html += `<li><a href="javascript:void(0)" data-page="1">1</a></li>`;
                if (startPage > 2) html += `<li class="disabled"><span>...</span></li>`;
            }

            for (let p = startPage; p <= endPage; p++) {
                if (p === currentPage) {
                    html += `<li class="active"><span>${p}</span></li>`;
                } else {
                    html += `<li><a href="javascript:void(0)" data-page="${p}">${p}</a></li>`;
                }
            }

            if (endPage < totalPages) {
                if (endPage < totalPages - 1) html += `<li class="disabled"><span>...</span></li>`;
                html += `<li><a href="javascript:void(0)" data-page="${totalPages}">${totalPages}</a></li>`;
            }

            // Tombol Next
            if (currentPage < totalPages) {
                html += `<li><a href="javascript:void(0)" data-page="${currentPage + 1}" title="Selanjutnya">&raquo;</a></li>`;
            } else {
                html += `<li class="disabled"><span>&raquo;</span></li>`;
            }

            paginationLinks.innerHTML = html;

            // Pasang event listener klik pada pagination
            paginationLinks.querySelectorAll('a[data-page]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    currentPage = parseInt(this.getAttribute('data-page'));
                    renderPagination();
                    if (produkGrid) produkGrid.scrollTop = 0;
                });
            });
        }

        // Filter pencarian
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const keyword = this.value.trim().toLowerCase();

                if (!keyword) {
                    filteredCards = allCards.slice();
                } else {
                    filteredCards = allCards.filter(card => {
                        const nama = card.getAttribute('data-nama') || '';
                        const kode = card.getAttribute('data-kode') || '';
                        return nama.includes(keyword) || kode.includes(keyword);
                    });
                }

                currentPage = 1;
                renderPagination();
            });
        }

        // Jalankan saat pertama kali dibuka
        renderPagination();

        // Reset pencarian saat modal ditutup / dibuka ulang
        $('#modal-produk').on('shown.bs.modal', function() {
            if (searchInput && searchInput.value.trim() === '') {
                filteredCards = allCards.slice();
                currentPage = 1;
                renderPagination();
            }
        });
    });
</script><?php /**PATH C:\project\pos\resources\views/penjualan_detail/produk.blade.php ENDPATH**/ ?>