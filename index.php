<?php

# Визначаємо кореневий каталог сайту
define('ROOT_DIR', dirname(__FILE__));

# Підключаємо основний файл ядра
require_once(ROOT_DIR . '/bootstrap/core.php');

# Підключаємо файл ініціалізації
require_once(ROOT_DIR . '/bootstrap/init.php');