<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$config = require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

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

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = preg_replace('/(^\/|\.html$)/ui', '', $path);
if (!$path) {
    $path = 'index';
}

$version = null;
preg_match('/^v(?<ver>\d+)($|\/)/ui', $path, $matches);
if (array_key_exists('ver', $matches)) {
    $version = (int)$matches['ver'];
}

if (!$version) {
    header('Location: /v3/index');
    die;
}

$url = $repository . '/blob/master/' . $path . '.md';
$path = str_replace('/', DIRECTORY_SEPARATOR, $path);
$file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'md' . DIRECTORY_SEPARATOR . $path . '.md';

if (file_exists($file)) {
    $parser = new Parsedown();
    $md = file_get_contents($file);

    $pos = strpos($md, '---', 10);
    $head = substr($md, 0, $pos);
    $md = substr($md, $pos + 3);
    $caption = explode("title:", $head)[1];
    $content = $parser->parse($md);
} else {
    $caption = 'Ошибка 404';
    $url = null;
    $content = '<p>Страница не найдена</p>';
}

$title = $caption;
if ($title) {
    $title .= ' - ';
};
$title .= 'Русская документация Slim Framework';

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'new.php';
