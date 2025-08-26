<?php
if (!isset($background)) {
    $background = '';
}
if (!isset($content)) {
    $content = '';
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hill Country Awards</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logos/favicon.ico">
</head>
<body style="background-image: url('<?= htmlspecialchars($background, ENT_QUOTES) ?>');">
    <div class="wrapper">
        <header>
            <a class="logo" href="index.php">
                <img src="images/logo/HCAT_logoSM.png" alt="Hill Country Awards">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
                    <li><a href="awards.php" class="<?= $current_page == 'awards.php' ? 'active' : '' ?>">Awards &amp; Trophies</a></li>
                    <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
                    <li><a href="clients.php" class="<?= $current_page == 'clients.php' ? 'active' : '' ?>">Clients</a></li>
                    <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?= $content ?>
        </main>
    </div>
    <footer>
        <div class="footer-contact">
            <p><strong>ABOUT HILL COUNTRY AWARDS</strong></p>
            <p>37 Years of excellence in Customer Service &amp; Quality</p>
            <p>512.756.6712</p>
            <p><a href="mailto:info@hillcountryawards.com">info@hillcountryawards.com</a></p>
            <p>409 Industrial Blvd, St 1000<br>Burnet, Tx 78611</p>
        </div>
        <div class="footer-copy">
            &copy; 2025 Hill Country Awards | Website Design and Hosting by <a href="https://www.cmschlosser.com" target="_blank" rel="noopener noreferrer">Fiction Author C.M. Schlosser</a>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('.carousel');
            if (!carousel) return;
            const slides = carousel.querySelectorAll('.slide');
            let index = 0;
            const total = slides.length;
            const nextBtn = carousel.querySelector('.next');
            const prevBtn = carousel.querySelector('.prev');
            function show(i) {
                slides.forEach((s, idx) => { s.style.display = idx === i ? 'block' : 'none'; });
                index = i;
            }
            function next() { show((index + 1) % total); }
            function prev() { show((index - 1 + total) % total); }
            let timer = setInterval(next, 5000);
            function resetTimer() { clearInterval(timer); timer = setInterval(next, 5000); }
            nextBtn.addEventListener('click', () => { next(); resetTimer(); });
            prevBtn.addEventListener('click', () => { prev(); resetTimer(); });
            show(0);
        });
    </script>
    </body>
    </html>

