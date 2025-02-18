<?php

/**
 * Автоматичне завантаження класів та функцій
 */

# Завантаження функцій
$functions_dir = ROOT_DIR . '/bootstrap/functions';
if (is_dir($functions_dir)) {
    foreach (glob($functions_dir . '/*.php') as $file_function) {
        require_once $file_function;
    }
}

# Завантаження класів
spl_autoload_register(function ($name_class) {
    $class_file = ROOT_DIR . '/bootstrap/classes/' . $name_class . '.class.php';
    if (is_file($class_file)) {
        require_once $class_file;
    }
});
