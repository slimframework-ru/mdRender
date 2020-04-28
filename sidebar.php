<?php
?>

<!--<form novalidate="novalidate" onsubmit="return false;" class="searchbox" style="visibility:hidden;height:0">-->
<!--<div role="search" class="searchbox__wrapper">-->
<!--<input id="docsearch" type="search" name="search" placeholder="Search in the doc" autocomplete="off"-->
<!--required="required" class="searchbox__input">-->
<!--<button type="submit" title="Submit your search query." class="searchbox__submit">-->
<!--<svg role="img" aria-label="Search">-->
<!--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-13"></use>-->
<!--</svg>-->
<!--</button>-->
<!--<button type="reset" title="Clear the search query." class="searchbox__reset hide">-->
<!--<svg role="img" aria-label="Reset">-->
<!--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-3"></use>-->
<!--</svg>-->
<!--</button>-->
<!--</div>-->
<!--</form>-->

<!--<div class="svg-icons" style="height: 0; width: 0; position: absolute; visibility: hidden">-->
<!--<svg xmlns="http://www.w3.org/2000/svg">-->
<!--<symbol id="sbx-icon-clear-3" viewBox="0 0 40 40">-->
<!--<path d="M16.228 20L1.886 5.657 0 3.772 3.772 0l1.885 1.886L20 16.228 34.343 1.886 36.228 0 40 3.772l-1.886 1.885L23.772 20l14.342 14.343L40 36.228 36.228 40l-1.885-1.886L20 23.772 5.657 38.114 3.772 40 0 36.228l1.886-1.885L16.228 20z"-->
<!--fill-rule="evenodd"/>-->
<!--</symbol>-->
<!--<symbol id="sbx-icon-search-13" viewBox="0 0 40 40">-->
<!--<path d="M26.806 29.012a16.312 16.312 0 0 1-10.427 3.746C7.332 32.758 0 25.425 0 16.378 0 7.334 7.333 0 16.38 0c9.045 0 16.378 7.333 16.378 16.38 0 3.96-1.406 7.593-3.746 10.426L39.547 37.34c.607.608.61 1.59-.004 2.203a1.56 1.56 0 0 1-2.202.004L26.807 29.012zm-10.427.627c7.322 0 13.26-5.938 13.26-13.26 0-7.324-5.938-13.26-13.26-13.26-7.324 0-13.26 5.936-13.26 13.26 0 7.322 5.936 13.26 13.26 13.26z"-->
<!--fill-rule="evenodd"/>-->
<!--</symbol>-->
<!--</svg>-->
<!--</div>-->


<h3 class="toc-title active">Начнем</h3>
<ul class="toc-links">
  <li><a href="/index">Домашняя</a></li>
  <li><a href="/start/installation">Установка</a></li>
  <li><a href="/start/upgrade">Руководство по обновлению</a></li>
  <li><a href="/start/web-servers">Веб сервер</a></li>
  <li><a href="/deployment/deployment">Развертывание</a></li>
</ul>

<h3 class="toc-title">Учебное пособие</h3>
<ul class="toc-links">
  <li><a href="/tutorial/first-app">Первое приложение</a></li>
</ul>

<h3 class="toc-title">Концепции</h3>
<ul class="toc-links">
  <li><a href="/concepts/value-objects">PSR 7</a></li>
  <li><a href="/concepts/middleware">Middleware (промежуточное)</a></li>
  <li><a href="/concepts/di">Контейнер зависимости</a></li>
</ul>

<h3 class="toc-title">Приложение</h3>
<ul class="toc-links">
  <li><a href="/objects/application">Обзор</a></li>
  <li><a href="/objects/application#application-configuration">Конфигурация</a></li>
  <li><a href="/objects/application#slim-default-settings">Настройки по умолчанию</a></li>
</ul>

<h3 class="toc-title">Запрос</h3>
<ul class="toc-links">
  <li><a href="/objects/request">Обзор</a></li>
  <li><a href="/objects/request#the-request-method">Метод запроса</a></li>
  <li><a href="/objects/request#the-request-headers">Заголовки запросов</a></li>
  <li><a href="/objects/request#the-request-body">Тело запроса</a></li>
  <li><a href="/objects/request#uploaded-files">Загруженные файлы</a></li>
  <li><a href="/objects/request#request-helpers">Помощьники</a></li>
  <li><a href="/objects/request#route-object">Обьект роутера</a></li>
  <li><a href="/objects/request#media-type-parsers">Анализаторы типов мультимедиа</a></li>
</ul>

<h3 class="toc-title">Ответ</h3>
<ul class="toc-links">
  <li><a href="/objects/response">Обзор</a></li>
  <li><a href="/objects/response#the-response-status">Статус ответа</a></li>
  <li><a href="/objects/response#the-response-headers">Заголовки ответов</a></li>
  <li><a href="/objects/response#the-response-body">Тело ответа</a></li>
  <li><a href="/objects/response#returning-json">Возвращение JSON</a></li>
</ul>

<h3 class="toc-title">Routing</h3>
<ul class="toc-links">
  <li><a href="/objects/router">Обзор</a></li>
  <li><a href="/objects/router#how-to-create-routes">Создание</a></li>
  <li><a href="/objects/router#route-callbacks">Callbacks</a></li>
  <li><a href="/objects/router#route-strategies">Сератегии</a></li>
  <li><a href="/objects/router#route-placeholders">Заполнители</a></li>
  <li><a href="/objects/router#route-names">Имена</a></li>
  <li><a href="/objects/router#route-groups">Группы</a></li>
  <li><a href="/objects/router#route-middleware">Middleware</a></li>
  <li><a href="/objects/router#container-resolution">Разрешение контейнера</a></li>
</ul>


<h3 class="toc-title">Обработка ошибок</h3>
<ul class="toc-links">
  <li><a href="/handlers/error">Обработчики ошибок</a></li>
  <li><a href="/handlers/not-found">404 не найдено</a></li>
  <li><a href="/handlers/not-allowed">405 нет доступа</a></li>
  <li><a href="/handlers/php-error">ошибка выполнения Runtime PHP</a></li>
</ul>

<h3 class="toc-title">Cook book</h3>
<ul class="toc-links">
  <li><a href="/cookbook/route-patterns">Завершение / в роутах</a></li>
  <li><a href="/cookbook/ip-address">Retrieving IP address</a></li>
  <li><a href="/cookbook/retrieving-current-route">Получение текущего маршрута</a></li>
  <li><a href="/cookbook/database-eloquent">Использование Eloquent вместе со Slim</a></li>
  <li><a href="/cookbook/enable-cors">Включение CORS</a></li>
  <li><a href="/cookbook/environment">Getting и Mocking окружение</a></li>
  <li><a href="/cookbook/uploading-files">Загрузка файлов с использованием форм POST</a></li>
  <li><a href="/cookbook/action-domain-responder">Action-Domain-Responder с Slim</a></li>
</ul>

<h3 class="toc-title">Дополнения</h3>
<ul class="toc-links">
  <li><a href="/features/templates">Шаблонизаторы</a></li>
  <li><a href="/features/caching">Кэширование HTTP</a></li>
  <li><a href="/features/csrf">Защита CSRF</a></li>
  <li><a href="/features/flash">Flash Messages</a></li>
  <li><a href="https://github.com/slimphp/Slim/wiki/Middleware-for-Slim-Framework-v3.x">3rd Party</a></li>
</ul>

<h3 class="toc-title">Contributing</h3>
<ul class="toc-links">
  <li><a href="/contributors/strategy">Branching Strategy</a></li>
  <li><a href="/contributors/guidelines">Guidelines</a></li>
</ul>