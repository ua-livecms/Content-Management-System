<?php

class view
{
    /**
     * Виводить шапку сторінки, підключаючи відповідний файл.
     *
     * Ця функція генерує HTML тег <head> та основні мета-дані для сторінки, такі як кодування, мета-теги для мобільних пристроїв, заголовок сторінки та підключає стилі.
     * Вона повинна бути викликана на початку кожної сторінки для коректної роботи всіх стилів і мета-тегів.
     *
     * @return void
     */

    public static function header() {
        ?>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Content Management System</title>
            <link rel="stylesheet" href="/bootstrap/assets/libs/font-awesome/font-awesome.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/html.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/captcha.css">
            <link rel="stylesheet" href="/bootstrap/assets/css/forms.css">
        </head>

        <body>
        <?php
    }

    /**
     * Встановлює заголовок сторінки.
     *
     * Ця функція дозволяє встановити заголовок для сторінки, який відображається у вкладці браузера.
     * Можна реалізувати зміни заголовку в залежності від контексту сторінки.
     *
     * @return void
     */

    static function title() {}

    /**
     * Встановлює опис сторінки.
     *
     * Ця функція дозволяє задати мета-опис для сторінки, що використовується пошуковими системами.
     * Опис допомагає покращити SEO сторінки.
     *
     * @return void
     */

    static function description() {}

    /**
     * Встановлює ключові слова для сторінки.
     *
     * Ця функція дозволяє встановити мета-ключові слова для сторінки, що також використовуються пошуковими системами для покращення SEO.
     *
     * @return void
     */

    static function keywords() {}

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
        </body>
        </html>
        <?php
    }
}
