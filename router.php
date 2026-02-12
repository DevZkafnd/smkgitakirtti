<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff|woff2|ttf|svg|ico)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
    include __DIR__ . '/index.php';
}
?>