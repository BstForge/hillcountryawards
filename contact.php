<?php
$background = 'images/hero/celebration_1SLD.jpg';
ob_start();
?>
<h1>Contact Us</h1>
<p>Reach out for quotes or questions using the form below.</p>
<?php
$content = ob_get_clean();
include 'layout.php';

