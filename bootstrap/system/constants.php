<?php

# Масив для збереження значень
$serverData = [
    # Ім'я файлу, до якого виконується звернення
    'PHP_SELF' => _filter($_SERVER['PHP_SELF'])
];

# Визначаємо константи з масиву
foreach ($serverData as $key => $value) {
    define($key, $value);
}
