<?php

class template
{
    # Виводить шапку сторінки, підключаючи відповідний файл
    public static function header() {
        echo <<<HTML
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Content Management System</title>
            <link rel="stylesheet" href="/bootstrap/assets/css/captcha.css">
        </head>
        
        <body>
        HTML;
    }

    # Отримання або відображення мітки.
    public static function label($text, $for_id = null, $label_class_text = 'system_label_class_text'): void
    {
        # Якщо передано ID, додаємо атрибут for
        if ($for_id) {
            echo '<label for="' . clearspecialchars($for_id) . '" class="' . clearspecialchars($label_class_text) . '">' . clearspecialchars($text) . '</label>';
        } else {
            # Якщо ID не передано, виводимо мітку без for
            echo '<label class="' . clearspecialchars($label_class_text) . '">' . clearspecialchars($text) . '</label>';
        }
    }

    # Генерує капчу
    public static function captcha($text = 'Числа з картинки', $captcha_class_input = 'system_captcha_class_input', $captcha_class_block = 'system_captcha_class_block'): void {
        global $captcha_length, $captcha_random_seed, $captcha_key;

        # Виводимо поле для введення капчі з заданим текстом-підказкою
        echo '<input autocomplete="off" placeholder="' . $text . '" name="captcha" class="' . $captcha_class_input . '" type="text" maxlength="' . $captcha_length . '" size="' . $captcha_length . '">';
        # Генерація зображень з випадковими цифрами
        echo '<div class="' . $captcha_class_block . '">';
        for ($i = 0; $i < $captcha_length; $i++) {
            # Генерація випадкової цифри (від 0 до 9)
            $random_digit = mt_rand(0, 9);
            # Створення хешу для цифри з урахуванням random_seed для унікальності
            $hashed_digit = md5($random_digit + $captcha_random_seed);
            # Виведення зображення, яке містить поточну цифру
            echo '<img src="' . PHP_SELF . '?image=' . $hashed_digit . '">';
            # Додаємо цифру до формування ключа капчі
            $captcha_key .= $random_digit;
        }
        # Створюємо фінальний хеш для капчі
        $captcha_key = md5($captcha_key + $captcha_random_seed);
        echo '</div>';
        # Сховане поле для збереження капчі на сервері (передача ключа капчі)
        echo '<input name="captcha_key" type="hidden" value="' . $captcha_key . '">';
    }

    # Створює елемент вибору (select)
    public static function select() {}

    # Створює елемент для вибору множинних варіантів (checkbox)
    static function checkbox() {}

    # Створює елемент для вибору одного варіанту (radio)
    static function radio() {}

    # Встановлює заголовок сторінки
    static function title() {}

    # Встановлює опис сторінки
    static function description() {}

    # Встановлює ключові слова для сторінки
    static function keywords() {}

    # Функція для обробки порожніх значень або помилок
    public static function empty() {}

    # Створює текстову область (textarea)
    static function textarea() {}

    /*
     * Створює поле вводу (input)
     * $name - ім'я передачі в POST
     * $placeholder - опис усередині поля
     * $title - опис поля
     * $length - максимальна кількість символів, що вводяться в поле
     * $value - введений у полі текст за замовчуванням
     * $class - стиль поля
     * $type - тип поля
     * $data - додаткові атрибути
     * $icons - іконки
     * $comment - коментар з вікном, що виспівує
     */

    static function input($name, $placeholder = null, $title = null, $length = null, $value = null, $class = 'system_form-control-100', $type = 'text', $data = null, $icons = 'user', $comment = null): void {}

    # Створює кнопку (button)
    static function button() {}

    # Виводить підвал сторінки, підключаючи відповідний файл
    public static function footer() {
        echo <<<HTML
            </body>
        </html>
        HTML;
    }
}



