<section id="komunitas" class="community-section">
    <div class="community-section__shape"></div>
    <div class="container">
        <div class="community-card">
            <div class="section-heading section-heading--center">
                <h2>Mau Info Bocoran Promo Jalur Dalam?</h2>
                <p>Tinggalkan Informasi kontakmu. Etmin akan broadcast info Flash Sale Tersembunyi eksklusif sebelum dipublikasikan ke umum.</p>
            </div>

            <form class="community-form" action="#komunitas" method="get">
                <div class="form-grid">
                    <label>
                        <span>Email Aktif</span>
                        <input type="email" name="email" placeholder="nama@email.com" required>
                    </label>
                    <label>
                        <span>Nomor WhatsApp</span>
                        <input type="tel" name="whatsapp" placeholder="08xxxxxxxxxx" required>
                    </label>
                </div>
                <label>
                    <span>Username IG / TikTok</span>
                    <input type="text" name="social" placeholder="@username untuk bonus voucher">
                </label>
                <input type="hidden" name="category" value="<?= e($activeCategory); ?>">
                <input type="hidden" name="search" value="<?= e($searchQuery); ?>">
                <input type="hidden" name="toast" value="Berhasil bergabung! Tunggu info promo rahasia dari kami via WA/DM.">
                <button type="submit" class="button button--dark">Daftarkan Saya ke Komunitas VIP</button>
                <p class="form-note">gw klo di benci spam.</p>
                
                <p class="form-note">Datamu aman kok bersama kami.</p>
            </form>
        </div>
    </div>
</section>
