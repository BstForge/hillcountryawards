<?php
$background = 'images/hero/bus1_home.jpg';
ob_start();
?>
<h1>Welcome to Hill Country Awards</h1>
<p>Your source for custom awards and engravings.</p>
<?php
$content = ob_get_clean();
include 'layout.php';

