<header class="site-header">
    <div class="container navbar">
        <a href="#hero" class="brand" aria-label="CuanHunters home">
            <img src="assets/icons/Logo Cuan Hunter.png" alt="Foto profil" class="brand__photo">
            <span>Cuan<span>Hunters</span></span>
        </a>

        <form class="search-form search-form--desktop" action="#flash-sale" method="get">
            <label class="sr-only" for="desktop-search">Cari promo</label>
            <span class="search-form__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false">
                    <path d="M10.8 4.2a6.6 6.6 0 1 0 0 13.2 6.6 6.6 0 0 0 0-13.2Zm-8.4 6.6a8.4 8.4 0 1 1 15.1 5.1l4 4a1.2 1.2 0 0 1-1.7 1.7l-4-4A8.4 8.4 0 0 1 2.4 10.8Z"></path>
                </svg>
            </span>
            <input
                id="desktop-search"
                type="search"
                name="search"
                placeholder="Cari elektronik, skincare, fashion..."
                value="<?= e($searchQuery); ?>"
            >
            <input type="hidden" name="category" value="<?= e($activeCategory); ?>">
        </form>

        <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-label="Buka menu navigasi">
        <label for="nav-toggle" class="nav-toggle-button" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="nav-links" aria-label="Menu utama">
            <a href="#flash-sale">Etalase Promo</a>
            <a href="#cara-klaim">Cara Klaim</a>
            <a href="#profil-saya" class="profile-link">
                <img src="assets/images/profile.png" alt="Foto profil" class="profile-link__photo">
                Profil Saya
            </a>
        </nav>

        <div class="mobile-panel">
            <form class="search-form" action="#flash-sale" method="get">
                <label class="sr-only" for="mobile-search">Cari promo</label>
                <span class="search-form__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false">
                        <path d="M10.8 4.2a6.6 6.6 0 1 0 0 13.2 6.6 6.6 0 0 0 0-13.2Zm-8.4 6.6a8.4 8.4 0 1 1 15.1 5.1l4 4a1.2 1.2 0 0 1-1.7 1.7l-4-4A8.4 8.4 0 0 1 2.4 10.8Z"></path>
                    </svg>
                </span>
                <input
                    id="mobile-search"
                    type="search"
                    name="search"
                    placeholder="Cari promo..."
                    value="<?= e($searchQuery); ?>"
                >
                <input type="hidden" name="category" value="<?= e($activeCategory); ?>">
            </form>
            <a href="#flash-sale">Etalase Promo</a>
            <a href="#cara-klaim">Cara Klaim</a>
            <a href="#profil-saya" class="mobile-profile-link">
                <img src="assets/images/profile.jpg" alt="Foto profil" class="profile-link__photo">
                Profil Saya
            </a>
        </div>
    </div>
</header>
