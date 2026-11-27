<?php
// Router for PHP built-in server (php -S 127.0.0.1:8097 router.php)
// Serves extensionless URLs:  /  -> index.php, /courses -> courses.php, etc.
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Static assets: let the server handle them.
if (preg_match('/\.(?:css|js|png|jpe?g|gif|webp|svg|ico|woff2?|map|json|txt)$/i', $uri)) {
    return false;
}

$path = rtrim($uri, '/');
if ($path === '') {
    $path = '/index';
}

$file = __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, $path) . '.php';
if (is_file($file)) {
    require $file;
    return true;
}

// fall back to static file or index
$direct = __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, $path);
if (is_file($direct)) {
    return false;
}

http_response_code(404);
echo '404 Not Found';
return true;