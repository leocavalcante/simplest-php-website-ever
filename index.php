<?php declare(strict_types=1);

$pages = [
    '/' => [
        'title' => 'SPWE',
        'file' => __DIR__ . '/pages/home.php',
    ],
    '/about' => [
        'title' => 'About | SPWE',
        'file' => __DIR__ . '/pages/about.php',
    ],
    '/contact' => [
        'title' => 'Contact | SPWE',
        'file' => __DIR__ . '/pages/contact.php',
    ],
];

$uri = $_SERVER['REQUEST_URI'];
$page = $pages[$uri] ?? null;

if ($page === null) {
    $page = [
        'title' => 'Not found | SPWE',
        'file' => __DIR__ . '/pages/404.php',
    ];
}

ob_start();
require_once $page['file'];
$content = ob_get_contents();
ob_end_clean();

require_once __DIR__ . '/pages/_layout.php';

