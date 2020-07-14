<?php

return array(
    'Начнем' => array(
        '/v4' => 'Домашняя',
        '/v4/start/installation' => 'Установка',
        '/v4/start/upgrade' => 'Руководство по обновлению',
        '/v4/start/web-servers' => 'Веб сервер',
        '/v4/deployment/deployment' => 'Развертывание',
    ),
    'Концепции' => array(
        '/v4/concepts/life-cycle' => 'Жизненный цикл приложения',
        '/v4/concepts/value-objects' => 'PSR 7',
        '/v4/concepts/middleware' => 'Middleware (промежуточное ПО)',
        '/v4/concepts/di' => 'Контейнер зависимости',
    ),
    'Приложение' => array(
        '/v4/objects/application' => 'Обзор',
        '/v4/objects/application#advanced-notices-and-warnings-handling' => 'Обработка уведомлений и предупреждений',
    ),
    'Запрос' => array(
        '/v4/objects/request' => 'Обзор',
        '/v4/objects/request#the-request-method' => 'Метод запроса',
        '/v4/objects/request#the-request-headers' => 'Заголовки запроса',
        '/v4/objects/request#the-request-body' => 'Тело запроса',
        '/v4/objects/request#uploaded-files' => 'Загруженные файлы',
        '/v4/objects/request#request-helpers' => 'Помощьники',
        '/v4/objects/request#route-object' => 'Обьект роутера',
    ),
    'Ответ' => array(
        '/v4/objects/response' => 'Обзор',
        '/v4/objects/response#the-response-status' => 'Статус ответа',
        '/v4/objects/response#the-response-headers' => 'Заголовки ответа',
        '/v4/objects/response#the-response-body' => 'Тело ответа',
        '/v4/objects/response#returning-json' => 'Возврат JSON',
    ),
    'Маршрутизация' => array(
        '/v4/objects/routing' => 'Обзор',
        '/v4/objects/routing#how-to-create-routes' => 'Создание маршрутов',
        '/v4/objects/routing#route-callbacks' => 'Коллбэк маршруты',
        '/v4/objects/routing#route-strategies' => 'Стратегии маршрутов',
        '/v4/objects/routing#route-placeholders' => 'Заполнители',
        '/v4/objects/routing#route-names' => 'Именованные маршруты',
        '/v4/objects/routing#route-groups' => 'Группы маршрутов',
        '/v4/objects/routing#route-middleware' => 'Middleware',
        '/v4/objects/routing#route-expressions-caching' => 'Кэширование',
        '/v4/objects/routing#container-resolution' => 'Разрешения контейнера',
    ),
    'Предоставляемые Middleware' => array(
        '/v4/middleware/routing' => 'Маршрутизация',
        '/v4/middleware/error-handling' => 'Обработка ошибок',
        '/v4/middleware/method-overriding' => 'Переопределение метода запроса',
        '/v4/middleware/output-buffering' => 'Буфферизация вывода',
        '/v4/middleware/body-parsing' => 'Разбор тела запроса',
        '/v4/middleware/content-length' => 'Размер ответа',
    ),
    'Cook book' => array(
        '/v4/cookbook/route-patterns' => 'Завершающий слэш в URI',
        '/v4/cookbook/retrieving-current-route' => 'Определение текущего роута',
        '/v4/cookbook/enable-cors' => 'Включение CORS',
        '/v4/cookbook/uploading-files' => 'Загрузка файлов с использованием форм POST',
    ),
    'Вклад в Slim' => array(
        '/v4/contributors/strategy' => 'Стратегия ветвления',
        '/v4/contributors/guidelines' => 'Руководство для участников',
    ),
);