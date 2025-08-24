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
        &copy; 2025 Hill Country Awards | Website Design and Hosting by <a href="https://www.cmschlosser.com" target="_blank" rel="noopener noreferrer">Fiction Author C.M. Schlosser</a>
    </footer>
    </body>
    </html>

