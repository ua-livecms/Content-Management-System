<?php
# Визначаємо кореневий каталог сайту
define('ROOT_DIR', dirname(__FILE__));

# Підключаємо основний файл системного ядра
require_once(ROOT_DIR . '/bootstrap/core.php');

# Запускаємо ініціалізацію маршрутизатора
router::init();
