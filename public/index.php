<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$config = (array)require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

$metrika = 0;
if (array_key_exists('metrika', $config) && !empty($config['metrika'])) {
    $metrika = (int)$config['metrika'];
}

$website = 'http://slimframework.ru';
if (array_key_exists('website', $config) && !empty($config['website'])) {
    $website = (string)$config['website'];
}

$repository = 'https://github.com/slimframework-ru/slim.ru';
if (array_key_exists('repository', $config) && !empty($config['repository'])) {
    $repository = (string)$config['repository'];
}

$googleAds = array();
foreach (array('show', 'format', 'layout', 'client', 'slot') as $k) {
    if (
        array_key_exists('ads', $config)
        && array_key_exists('google', $config['ads'])
        && array_key_exists($k, $config['ads']['google'])
    ) {
        $v = $config['ads']['google'][$k];
    } else {
        $v = null;
    }
    $googleAds['googleAds' . ucfirst($k)] = $v;
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = preg_replace('/(^\/|\.html$)/ui', '', $path);
$current = '/' . $path;
$version = null;
preg_match('/^v(?<ver>\d+)($|\/)/ui', $path, $matches);
if (array_key_exists('ver', $matches)) {
    $version = (int)$matches['ver'];
}

if (!$version) {
    header('Location: /v3');
    die;
}

$dir = implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'md',  str_replace('/', DIRECTORY_SEPARATOR, $path)));

if (is_dir($dir)) {
    $file = $dir . DIRECTORY_SEPARATOR . 'index.md';
    $url = $repository . '/blob/master/' . $path . '/index.md';
} else {
    $file = $dir . '.md';
    $url = $repository . '/blob/master/' . $path . '.md';
}

if (file_exists($file)) {
    $parser = new Parsedown();
    $md = file_get_contents($file);
    $pos = strpos($md, '---', 10);
    $head = substr($md, 0, $pos);
    $md = substr($md, $pos + 3);
    $caption = explode("title:", $head)[1];
    // Жесткий хак on
    // Когда не осилил Parsedown
    $md = preg_replace('/([^`])`([^`]+)`([^`])/ui', '$1<code class="language-plaintext highlighter-rouge">$2</code>$3', $md);
    // Жесткий хак off

    $content = $parser->parse($md);

    // Жесткий хак on
    // Когда не осилил Parsedown
    $content = preg_replace('/<pre><code\s+class=\"language-([\w-]+)\">([^<]+)<\/code><\/pre>/ui', '<div class="language-$1 highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$2</code></pre></div></div>', $content);
    // Жесткий хак off
} else {
    $caption = 'Ошибка 404';
    $url = null;
    $content = '<p>Страница не найдена</p>';
}

$title = $caption;
if ($title) {
    $title .= ' - ';
}
$title .= 'Русская документация Slim Framework';

$sidebarFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'sidebar' . DIRECTORY_SEPARATOR . 'v' . $version . '.php';

$sidebar = file_exists($sidebarFile) ? require $sidebarFile : array();

$active = null;
$prev = null;
$isPrev = false;
$next = null;
$isNext = false;
foreach ($sidebar as $part => $items) {
    foreach ($items as $item => $page) {
        $arr = explode('#', $item);
        $link = $arr[0];
        if ($active && !$isNext && $current !== $link) {
            $next = [
                'link' => $item,
                'part' => $part,
                'page' => $page,
            ];
            $isNext = true;
        }
        if ($link === $current) {
            $active = $part;
            $isPrev = true;
        }
        if (!$isPrev) {
            $prev = [
                'link' => $item,
                'part' => $part,
                'page' => $page,
            ];
        }
    }
}

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'index.php';
