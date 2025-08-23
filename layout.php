<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            background-color: #f9fcff;
            background-image: url('<?php echo htmlspecialchars($backgroundImage, ENT_QUOTES); ?>');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top center;
            background-size: cover;
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            color: #000;
        }
    </style>
    <title>Hill Country Awards & Trophies</title>
</head>
<body>
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header>
    <img src="/images/logo/HCAT_logoSM.png" alt="Hill Country Awards &amp; Trophies">
    <nav>
        <ul>
            <li><a href="/index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="/awards.php" class="<?php echo $currentPage === 'awards.php' ? 'active' : ''; ?>">Awards &amp; Trophies</a></li>
            <li><a href="/about.php" class="<?php echo $currentPage === 'about.php' ? 'active' : ''; ?>">About</a></li>
            <li><a href="/clients.php" class="<?php echo $currentPage === 'clients.php' ? 'active' : ''; ?>">Clients</a></li>
            <li><a href="/contact.php" class="<?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
<?php
$files = glob($contentFolder . '*.txt');
natsort($files);
foreach ($files as $file) {
    echo '<section>' . nl2br(htmlspecialchars(file_get_contents($file))) . '</section>';
}
?>
</main>
<footer>
    <p>&copy; 2025 Hill Country Awards &amp; Trophies | Site designed and hosted by <a href="https://www.cmschlosser.com">Fiction Author C.M. Schlosser</a></p>
</footer>
</body>
</html>
