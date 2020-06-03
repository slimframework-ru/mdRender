<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$config = require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

$Parsedown = new Parsedown();

$title = '';
$page = '';
$routes = $_SERVER['REQUEST_URI'];

if ($routes == '/') {
  $file = './md/index.md';
  $fileGIt = '/md/index.md';

  $pageTmp = file_get_contents($file);
  $pos = strpos($pageTmp, '---', 10);
  $page = substr($pageTmp, $pos + 3);

  $titleTmp = substr($pageTmp, 0, $pos);
  $title = explode("title:", $titleTmp)[1];
} else {
  $file = './md' . $routes . '.md';
  $fileGIt = $routes . '.md';

  $pageTmp = file_get_contents($file);
  $pos = strpos($pageTmp, '---', 10);
  $page = substr($pageTmp, $pos + 3);

  $titleTmp = substr($pageTmp, 0, $pos);
  $title = explode("title:", $titleTmp)[1];
}

$metrika = $config['metrika'];

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'index.php';
