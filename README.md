# Сайт русской документации фреймворка Slim.

## Установка

1. Клонировать репозиторий
    
    ```bash
    git clone git@github.com:slimframework-ru/mdReader.git /path/to/project
    ```

1. Установить зависимости
    
    ```bash
    composer install
    ```

1. Если нет файла `/path/to/project/config/config.php`, скопировать из примера
    
    ```bash
    cd /path/to/project/config
    php -r "file_exists('config.php') || copy('config.example.php', 'config.php');"
    ```

1. Настроить конфигурацию приложения (файл `/path/to/project/config/config.php`)
    
    ```php
    return array(
        'metrika' => null, // Идентификатор Яндекс.Метрики
        'repository' => 'https://github.com/slimframework-ru/slim.ru', // Репозиторий с markdown-файлами документации. Необходим для ссылки "Редактировать страницу".
        'website' => 'http://slimframework.ru', // Адрес сайта. Необходим для микроразметки.
    );
    ```

1. Настроить вебсервер так, чтобы `DOCUMENT_ROOT` был в `/path/to/project/public` и все несуществующие файлы обрабатывались файлом `index.php`. Для примера, конфиг nginx
    
    ```text
    server {
        listen 80;
        server_name slimframework.ru;
        root /path/to/project/public/public;
        index index.php index.html;
    
        location ~* \.(jpg|jpeg|gif|css|png|js|ico|txt)$ {
            access_log off;
            expires max;
            log_not_found off;
        }
    
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }
    
        location ~ \.php$ {
            include fastcgi.conf;
            fastcgi_pass unix:/run/php/php-fpm.sock;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            add_header Cache-Control "no-store";
        }
    
        location ~ /\.ht {
            deny all;
        }
    }
    ```

1. Добавить файлы документации (в формате markdown) в директорию `/path/to/project/md/v{VER}`, где `{VER}` - номер версии фреймворка. Эти файлы можно взять из [репозитория](https://github.com/slimframework-ru/slim.ru)

1. Оглавление редактируется в файлах `/path/to/project/sidebar/v{VER}.php`, где `{VER}` - номер версии фреймворка.
