<?php
/**
 * @var int $version
 * @var int $metrika
 * @var string $website
 * @var string $title
 * @var string $caption
 * @var string $content
 * @var string $url
 * @var string $current
 * @var array $sidebar
 * @var array $googleAds
 * @var string|null $active
 * @var array|null $prev
 * @var array|null $next
 */
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?=$title;?></title>
    <meta name="description" content=""/>
    <meta name="robots" content="index, follow"/>
    <meta property="og:title" content="<?=$title;?>"/>
    <meta property="og:site_name" content="<?=$title;?>"/>
    <meta property="og:url" content="<?=$website;?>"/>
    <meta property="og:description" content="<?=$title;?>"/>
    <meta property="og:type" content="website"/>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    <link rel="shortcut icon" href="/assets/images/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <script src="https://use.typekit.net/yjz4fyo.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'metrika.php'; ?>

<?php if(!empty($googleAds['googleAdsShow']) && !empty($googleAds['googleAdsClient'])):?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "<?=$googleAds['googleAdsClient'];?>",
            enable_page_level_ads: true
        });
    </script>
<?php endif; ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-logo" href="/">Slim</a>
        </div>
        <?php if($version):?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-documentation-version-badge">
                <span>Документация v<?=$version;?></span>
            </div>
        </div>
        <?php endif;?>
    </div>
</nav>
<div class="wrapper docs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="toc-nav-toggle">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tocNav"
                            aria-expanded="false" aria-controls="tocNav">
                        Навигация
                    </button>
                </div>
                <div class="collapse toc-nav-collapse" id="tocNav">
                    <h3 class="toc-title" style="margin-top:0">Версия Slim</h3>
                    <div style="border:1px solid #CCC;border-radius:16px;box-sizing:border-box;margin:0 0 30px;padding:0 8px;width:200px;-webkit-appearance:none">
                        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" style="border:0;border-radius:16px;height:32px;margin:0;outline:none;padding:0;width:100%">
                            <option value="/v3"<?php if($version == 3):?> selected<?php endif;?>>v3</option>
                            <option value="/v4"<?php if($version == 4):?> selected<?php endif;?>>v4</option>
                        </select>
                    </div>

<?php foreach ($sidebar as $part => $items):?>
                    <h3 class="toc-title<?php if ($part === $active):?> active<?php endif;?>"><?=$part;?></h3>
                    <ul class="toc-links">
<?php foreach ($items as $link => $name):?>
                        <li><a href="<?=$link?>"><?=$name?></a></li>
<?php endforeach; ?>
                    </ul>
<?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-8 docs-content">
                <h1 class="page-header"><?=$caption?></h1>
                <?php include __DIR__ . DIRECTORY_SEPARATOR . 'google-ads.php'; ?>
<?php if($url):?>
                <div class="edit-panel" style="margin: 0 0 1em 0;">
                    <a href="<?=$url;?>" target="_blank" class="btn btn-default btn-sm"><i class="fa fa-github"></i> редактировать страницу </a>
                </div>
<?php endif;?>
                <?=$content;?>

<?php if ($prev || $next):?>
                <nav>
                    <ul class="nav pager">
<?php if ($prev):?>
                        <li class="previous">
                            <a href="<?=$prev['link']?>" rel="prev"><i class="fa fa-arrow-left"></i> <small><?=$prev['part']?>: </small> <?=$prev['page']?></a>
                        </li>
<?php endif;?>
<?php if ($next):?>
                        <li class="next">
                            <a href="<?=$next['link']?>" rel="next"><small><?=$next['part']?>: </small> <?=$next['page']?> <i class="fa fa-arrow-right"></i></a>
                        </li>
<?php endif;?>
                    </ul>
                </nav>
<?php endif;?>
            </div>
        </div>
        <footer class="site-footer">
            <p>
                Создано и поддерживается<br/>
               <a target="_blank" href="https://github.com/bad4iz">bad4iz</a>,
                 <a target="_blank" href="https://github.com/ddrv">bad4iz</a> и
                <a href="https://github.com/orgs/slimphp/people" target="_blank">командой Slim Framework</a>
            </p>
        </footer>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/scripts/build/production.min.js"></script>
</body>
</html>
