<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?bg=<?php echo urlencode($backgroundImage); ?>">
    <title>Hill Country Awards & Trophies</title>
</head>
<body>
<header>
    <img src="/images/logo/HCAT_logoSM.png" alt="Hill Country Awards &amp; Trophies">
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/awards.php">Awards &amp; Trophies</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/clients.php">Clients</a></li>
            <li><a href="/contact.php">Contact</a></li>
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
    <p>&copy; Hill Country Awards &amp; Trophies</p>
</footer>
</body>
</html>
