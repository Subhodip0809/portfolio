<?php
require "phpqrcode/qrlib.php";
$y = "qrcode";

// 1. Tell the browser to expect an image
header('Content-Type: image/png');

// 2. Pass 'false' as the second argument to stream it to the screen
// instead of saving it to a file.
QRcode::png($y, false, "m", 4, 3);
?>