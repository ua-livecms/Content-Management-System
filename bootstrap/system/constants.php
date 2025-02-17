<?php

/**
 * Визначення констант для серверних даних
 */

# Поточний системний час
define("TM", time());
# Ім'я файлу, до якого виконується звернення
define("PHP_SELF", _filter($_SERVER['PHP_SELF']));
# Домен сайту
define("HTTP_HOST", _filter($_SERVER['HTTP_HOST']));
# Ім'я сервера
define("SERVER_NAME", _filter($_SERVER['SERVER_NAME']));
# Схема (http/https)
define("SCHEME", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http');
# Повний URL, включаючи схему, домен та шлях
const FULL_URL = SCHEME . '://' . HTTP_HOST . PHP_SELF;
# Реферер
define("REFERER", _filter($_SERVER['HTTP_REFERER'] ?? 'none'));
# Откуда пришли
define("HTTP_REFERER", isset($_SERVER['HTTP_REFERER']) ? _filter($_SERVER['HTTP_REFERER']) : 'none');
# Браузер пользователя
define("BROWSER", isset($_SERVER['HTTP_USER_AGENT']) ? _filter($_SERVER['HTTP_USER_AGENT']) : 'none');
