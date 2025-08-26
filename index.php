<?php
$background = 'images/hero/bus1_home.jpg';
$carouselDir = 'content/index/carousel';
$carouselImages = [];
if (is_dir($carouselDir)) {
    foreach (scandir($carouselDir) as $file) {
        if (preg_match('/\.(jpe?g|png|gif)$/i', $file)) {
            $carouselImages[] = $file;
        }
    }
}

$contentDir = 'content/index';
$contentFiles = [];
if (is_dir($contentDir)) {
    foreach (scandir($contentDir) as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
            $contentFiles[] = $file;
        }
    }
}

ob_start();
?>
<?php if (!empty($carouselImages)) : ?>
<div class="carousel">
    <?php foreach ($carouselImages as $img) :
        $caption = ucwords(str_replace(['-','_'], ' ', pathinfo($img, PATHINFO_FILENAME))); ?>
    <div class="slide">
        <img src="<?= $carouselDir . '/' . htmlspecialchars($img, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($caption, ENT_QUOTES) ?>">
        <div class="caption"><?= htmlspecialchars($caption) ?></div>
    </div>
    <?php endforeach; ?>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</div>
<?php endif; ?>

<?php foreach ($contentFiles as $file) : ?>
    <p><?= htmlspecialchars(file_get_contents($contentDir . '/' . $file)) ?></p>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
include 'layout.php';

