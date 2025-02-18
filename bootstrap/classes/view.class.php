<?php

class view
{
    # Статичні змінні для зберігання значень
    private static string $title = '';
    private static string $description = '';
    private static string $keywords = '';

    /**
     * Встановлює заголовок сторінки, який відображається у вкладці браузера.
     * Ця функція дозволяє змінити заголовок сторінки залежно від контексту.
     *
     * @param string $title Заголовок сторінки.
     * @return void
     */

    public static function title(string $title): void
    {
        self::$title = $title;
    }

    /**
     * Встановлює опис сторінки, який використовується пошуковими системами для SEO.
     * Опис сторінки має допомогти користувачам зрозуміти зміст сторінки через пошукові результати.
     *
     * @param string $description Опис сторінки.
     * @return void
     */

    public static function description(string $description): void
    {
        self::$description = $description;
    }

    /**
     * Встановлює ключові слова для сторінки, що використовуються для покращення SEO.
     * Ключові слова допомагають пошуковим системам правильно індексувати сторінку.
     *
     * @param string $keywords Ключові слова.
     * @return void
     */

    public static function keywords(string $keywords): void
    {
        self::$keywords = $keywords;
    }

    /**
     * Виводить шапку сторінки, підключаючи відповідний файл.
     *
     * Ця функція генерує HTML тег <head> та основні мета-дані для сторінки, такі як кодування, мета-теги для мобільних пристроїв, заголовок сторінки та підключає стилі.
     * Вона повинна бути викликана на початку кожної сторінки для коректної роботи всіх стилів і мета-тегів.
     *
     * @return void
     */

    public static function header(): void
    {
        ?>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo htmlspecialchars(self::$title); ?></title>
            <meta name="description" content="<?php echo htmlspecialchars(self::$description); ?>">
            <meta name="keywords" content="<?php echo htmlspecialchars(self::$keywords); ?>">
            <link rel="stylesheet" href="/bootstrap/assets/libs/font-awesome/font-awesome.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/html.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/captcha.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/forms.css">
        </head>

        <body>

        <?php
    }

    /**
     * Виводить підвал сторінки, підключаючи відповідний файл.
     *
     * Ця функція генерує HTML тег </body> та </html>, завершуючи сторінку.
     * Викликається в кінці кожної сторінки для коректного закриття тегів.
     *
     * @return void
     */

    public static function footer() {
        ?>
        <script src="#"></script>
        </body>
        </html>
        <?php
    }
}
