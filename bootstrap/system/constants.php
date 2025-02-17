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
