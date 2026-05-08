<section id="cara-klaim" class="how-it-works">
    <div class="container">
        <div class="section-heading section-heading--center">
            <h2>Cara Kerja Klaim Promo</h2>
            <p>Pilih produk premium, cek detail flash sale, lalu hubungi admin lewat WhatsApp sebelum slot promo habis.</p>
        </div>

        <div class="steps-grid">
            <article class="step-card">
                <span>1</span>
                <h3>Pilih Promo</h3>
                <p>Cari produk elektronik premium atau kategori viral lain yang sedang masuk etalase diskon.</p>
            </article>
            <article class="step-card">
                <span>2</span>
                <h3>Chat Admin</h3>
                <p>Tekan tombol WhatsApp untuk menghubungi admin dan mengamankan kesempatan promo.</p>
            </article>
            <article class="step-card">
                <span>3</span>
                <h3>Konfirmasi Cepat</h3>
                <p>Ikuti arahan admin agar proses klaim flash sale berjalan cepat, rapi, dan aman.</p>
            </article>
        </div>
    </div>
</section>

<section id="flash-sale" class="products-section">
    <div class="container">
        <div class="products-top">
            <div class="section-heading">
                <h2><span class="title-mark">SALE</span> Etalase Diskon</h2>
                <p>Filter kategori promo premium pilihan hari ini.</p>
            </div>

            <div class="filter-pills" aria-label="Filter kategori produk">
                <?php foreach ($categories as $key => $label) : ?>
                    <a
                        href="?category=<?= e($key); ?>&search=<?= urlencode($searchQuery); ?>#flash-sale"
                        class="<?= $activeCategory === $key ? 'is-active' : ''; ?>"
                    >
                        <?= e($label); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <?php if (count($filteredProducts) === 0) : ?>
            <div class="empty-state">
                <span>?</span>
                <h3>Promo kategori ini belum tersedia.</h3>
                <p>Coba pilih kategori Elektronik untuk melihat flash sale premium hari ini.</p>
            </div>
        <?php endif; ?>

        <div class="product-grid product-grid--featured">
            <?php foreach ($filteredProducts as $product) : ?>
                <article class="product-card product-card--premium">
                    <div class="product-card__image">
                        <img src="<?= e($product->image); ?>" alt="<?= e($product->name); ?>">
                        <span>Diskon <?= $product->getDiscountPercentage(); ?>%</span>
                    </div>

                    <div class="product-card__body">
                        <p class="product-card__category"><?= e(ucfirst($product->category)); ?> Premium</p>
                        <h3><?= e($product->name); ?></h3>
                        <div class="product-card__meta">
                            <strong>★ <?= e((string) $product->rating); ?></strong>
                            <span>-</span>
                            <span>Terjual <?= number_format($product->sold, 0, ',', '.'); ?>+</span>
                        </div>

                        <div class="product-card__price">
                            <span><?= $product->formatPrice($product->originalPrice); ?></span>
                            <strong><?= $product->formatPrice($product->getDiscountPrice()); ?></strong>
                        </div>

                        <a
                            class="button button--whatsapp"
                            href="https://wa.me/6287781896510"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Hubungi admin lewat WhatsApp untuk <?= e($product->name); ?>"
                        >
                            <svg viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M16.02 3.2A12.67 12.67 0 0 0 5.08 22.25L3.6 28.8l6.7-1.43A12.67 12.67 0 1 0 16.02 3.2Zm0 22.8c-2.05 0-3.96-.6-5.57-1.65l-.4-.25-3.96.84.86-3.86-.26-.4A10.12 10.12 0 1 1 16.02 26Zm5.85-7.58c-.32-.16-1.9-.94-2.2-1.05-.3-.1-.52-.16-.74.16-.22.32-.85 1.05-1.04 1.27-.19.22-.38.24-.7.08-.32-.16-1.36-.5-2.59-1.6-.96-.85-1.6-1.9-1.79-2.22-.19-.32-.02-.5.14-.65.15-.14.32-.38.49-.57.16-.19.22-.32.32-.54.1-.22.05-.4-.03-.57-.08-.16-.74-1.78-1.01-2.44-.27-.64-.54-.55-.74-.56h-.63c-.22 0-.57.08-.87.4-.3.32-1.14 1.11-1.14 2.71 0 1.6 1.17 3.15 1.33 3.37.16.22 2.3 3.51 5.57 4.92.78.34 1.39.54 1.86.69.78.25 1.5.21 2.06.13.63-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.3-.21-.62-.37Z"></path>
                            </svg>
                            Chat WhatsApp
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="products-quote">
            <p>Etmin akan selalu mengupdate informasi flash sale diskonan pada setiap harinya.</p>
            <p>*kalo mood</p>
        </div>
    </div>
</section>
