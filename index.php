<?php declare(strict_types=1);

$pages = [
    '/' => __DIR__ . '/pages/home.php',
    '/404' => __DIR__ . '/pages/404.php',
    '/about' => __DIR__ . '/pages/about.php',
    '/contact' => __DIR__ . '/pages/contact.php',
];

$uri = $_SERVER['REQUEST_URI'];
$page = $pages[$uri] ?? $pages['/404'];

ob_start();
require_once $page;
$content = ob_get_contents();
ob_end_clean();

require_once __DIR__ . '/pages/_layout.php';

