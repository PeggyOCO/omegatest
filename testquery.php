<?php
$im = imagecreatefrompng("test.png");
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
?>
<h2>test</h2>
