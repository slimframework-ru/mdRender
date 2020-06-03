<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?= $title; ?> - Русская документация - Slim Framework</title>
    <meta name="description" content="<?= $title; ?> - Русская документация - Slim Framework"/>
    <meta name="robots" content="index, follow"/>
    <meta property="og:title" content="<?= $title; ?> - Русская документация - Slim Framework"/>
    <meta property="og:site_name" content="<?= $title; ?> - Русская документация - Slim Framework"/>
    <meta property="og:url" content="http://slimframework.ru"/>
    <meta property="og:description" content="<?= $title; ?> - Русская документация - Slim Framework"/>
    <meta property="og:type" content="<?= $title; ?> - Русская документация - Slim Framework"/>
    <link rel="stylesheet" href="/assets/css/all.css"/>
    <link rel="shortcut icon" href="/assets/images/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<?php if (!empty($metrika)):?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter<?=$metrika;?> = new Ya.Metrika({
                        id:<?=$metrika;?>,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true,
                        trackHash:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/<?=$metrika;?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
<?php endif; ?>
</head>
<body style="padding-top: 5em">


<div class="wrapper docs">
    <div class="container-fluid">
        <header class="site-header">
            <div class="site-title"><a href="/index.php">Slim</a></div>
            <div class="site-slogan">микро framework для PHP</div>
        </header>

        <div class="row">

            <div class="col-md-3">
                <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
            </div>

            <h1><?= $title; ?></h1>
            <hr/>
            <div class="col-md-8 docs-content">
                <div class="edit-panel" style="margin: 0 0 1em 0;">
                    <a href="https://github.com/bad4iz/slim.ru/blob/master<?= $fileGIt ?>" target="_blank"
                       class="btn btn-default btn-xs"><i
                            class="fa fa-github"></i> редактировать страницу </a>
                </div>
                <?= $Parsedown->text($page); ?>
            </div>

        </div>

        <footer class="site-footer">
            <p>Перевод
                <a href="">bad4iz</a>
            </p>
            <p>
                Созданный и поддерживаемый  <br/>
                <a href="http://joshlockhart.com">Josh Lockhart</a>,
                <a href="http://www.silentworks.co.uk" target="_blank">Andrew Smith</a>,
                <a href="http://akrabat.com/" target="_blank">Rob Allen</a>, и командой
                <a href="https://github.com/orgs/slimphp/people" target="_blank">Slim Framework</a>
            </p>
        </footer>
    </div>
</div>

<script src="/assets/scripts/build/jquery.min.js"></script>
<script src="/assets/scripts/build/production.min.js"></script>

</body>
</html>