<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$config = require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

$metrika = (int)$config['metrika'];
$repository = 'https://github.com/slimframework-ru/slim.ru';

if (array_key_exists('repository', $config) && !empty($config['repository'])) {
    $repository = (string)$config['repository'];
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = preg_replace('/(^\/|\.html$)/ui', '', $path);
if (!$path) {
    $path = 'index';
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

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'index.php';
