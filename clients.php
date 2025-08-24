<?php
$background = 'images/hero/football.png';
ob_start();
?>
<h1>Clients</h1>
<p>See the clients we proudly serve.</p>
<?php
$content = ob_get_clean();
include 'layout.php';
