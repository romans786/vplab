<?php

$root = dirname(__DIR__);
$output = $root . '/dist';

if (!is_dir($output) && !mkdir($output, 0775, true) && !is_dir($output)) {
    throw new RuntimeException('Unable to create the Netlify output directory.');
}

$pages = glob($root . '/*.php');
$redirects = array(
    '/index/ / 301!',
    '/index.php / 301!',
    '/index / 301!',
);
$generatedPages = 0;

foreach ($pages as $page) {
    $slug = basename($page, '.php');
    if (in_array($slug, array('header', 'footer', 'router'), true)) {
        continue;
    }

    $_SERVER['REQUEST_URI'] = '/' . $slug;
    $_COOKIE = array();

    ob_start();
    require $page;
    $html = ob_get_clean();
    $filename = $slug === 'index' ? 'index.html' : $slug . '.html';

    if (file_put_contents($output . '/' . $filename, $html) === false) {
        throw new RuntimeException('Unable to write the generated page: ' . $filename);
    }
    $generatedPages++;

    if ($slug !== 'index') {
        $redirects[] = '/' . $slug . '.php /' . $slug . ' 301!';
        $redirects[] = '/' . $slug . ' /' . $filename . ' 200';
    }
}

foreach (array('css', 'img', 'js') as $directory) {
    $source = $root . '/' . $directory;
    $destination = $output . '/' . $directory;

    if (!is_dir($source)) {
        continue;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $item) {
        $target = $destination . '/' . substr($item->getPathname(), strlen($source) + 1);
        if ($item->isDir()) {
            if (!is_dir($target) && !mkdir($target, 0775, true) && !is_dir($target)) {
                throw new RuntimeException('Unable to create asset directory: ' . $target);
            }
        } elseif (!is_dir(dirname($target)) && !mkdir(dirname($target), 0775, true) && !is_dir(dirname($target))) {
            throw new RuntimeException('Unable to create asset directory: ' . dirname($target));
        } elseif (!copy($item->getPathname(), $target)) {
            throw new RuntimeException('Unable to copy asset: ' . $item->getPathname());
        }
    }
}

$redirectsPath = $output . '/_redirects';
if (file_put_contents($redirectsPath, implode(PHP_EOL, $redirects) . PHP_EOL) === false) {
    throw new RuntimeException('Unable to write Netlify redirects.');
}

echo 'Generated ' . $generatedPages . ' static pages into ' . $output . PHP_EOL;
