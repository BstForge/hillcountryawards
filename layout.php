<?php
if (!isset($background)) {
    $background = '';
}
if (!isset($content)) {
    $content = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hill Country Awards</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url('<?= htmlspecialchars($background, ENT_QUOTES) ?>');">
    <div class="wrapper">
        <header>
            <a class="logo" href="index.php">
                <img src="images/logo/HCAT_logoSM.png" alt="Hill Country Awards">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?= $content ?>
        </main>
    </div>
    <footer>
        &copy; <?= date('Y') ?> Hill Country Awards
    </footer>
</body>
</html>

