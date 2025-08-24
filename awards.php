<?php
$background = 'images/hero/champ_girl1.png';
ob_start();
?>
<h1>Awards</h1>
<p>Explore our collection of trophies, plaques, and medals.</p>
<?php
$content = ob_get_clean();
include 'layout.php';

