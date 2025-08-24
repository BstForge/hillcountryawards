<?php
$background = 'images/hero/Americabg3.jpg';
ob_start();
?>
<h1>About</h1>
<p>Learn more about Hill Country Awards.</p>
<?php
$content = ob_get_clean();
include 'layout.php';
