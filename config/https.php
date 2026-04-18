<?php
/**
 * HTTPS Configuration & Redirection
 * Add this to your .htaccess or web server configuration
 */

// Force HTTPS redirect (add to index.php or use .htaccess)
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    // Redirect to HTTPS
    $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $url", true, 301);
    exit();
}

// Additional security headers for HTTPS
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header('Upgrade-Insecure-Requests: 1');

// Other recommended headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// Content Security Policy
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:; font-src 'self' https://fonts.gstatic.com;");
?>
