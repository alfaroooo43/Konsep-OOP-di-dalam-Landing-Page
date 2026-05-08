<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CuanHunters adalah landing page promo native PHP untuk flash sale premium, gadget viral, dan komunitas pemburu diskon digital.">
    <title>CuanHunters - Flash Sale Premium</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php if ($toast !== '') : ?>
        <div class="toast" role="status">
            <span class="toast__icon">OK</span>
            <p><?= e($toast); ?></p>
        </div>
    <?php endif; ?>

    <?php require_once BASE_PATH . '/views/partials/navbar.php'; ?>

    <main>
        <?php require_once BASE_PATH . '/views/partials/hero.php'; ?>
        <?php require_once BASE_PATH . '/views/partials/products.php'; ?>
        <?php require_once BASE_PATH . '/views/partials/komunitas.php'; ?>
        <?php require_once BASE_PATH . '/views/partials/profile.php'; ?>
    </main>

    <?php require_once BASE_PATH . '/views/partials/footer.php'; ?>

    <script>
        const timerParts = {
            hours: document.querySelector('[data-countdown="hours"]'),
            minutes: document.querySelector('[data-countdown="minutes"]'),
            seconds: document.querySelector('[data-countdown="seconds"]')
        };

        function getTimeToMidnight() {
            const now = new Date();
            const midnight = new Date(now);
            midnight.setHours(24, 0, 0, 0);
            const diff = Math.max(0, midnight - now);

            return {
                hours: Math.floor(diff / 3600000),
                minutes: Math.floor((diff % 3600000) / 60000),
                seconds: Math.floor((diff % 60000) / 1000)
            };
        }

        function setTimerValue(element, value) {
            if (!element) return;

            const formatted = String(value).padStart(2, '0');
            if (element.textContent !== formatted) {
                element.textContent = formatted;
                element.classList.remove('is-changing');
                void element.offsetWidth;
                element.classList.add('is-changing');
            }
        }

        function updateCountdown() {
            const time = getTimeToMidnight();
            setTimerValue(timerParts.hours, time.hours);
            setTimerValue(timerParts.minutes, time.minutes);
            setTimerValue(timerParts.seconds, time.seconds);
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
