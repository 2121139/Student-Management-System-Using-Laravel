<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Define the path to the index.php file within the public directory
$indexPath = __DIR__ . '/public/index.php';

// Check if the requested URI doesn't correspond to an existing file or directory
if ($uri !== '/' && file_exists($indexPath) && is_readable($indexPath)) {
    // Directly return the requested file or directory
    return false;
}

// Include the index.php file of your Laravel application
require_once $indexPath;
