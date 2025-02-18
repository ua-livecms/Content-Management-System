<?php

class form
{
    /**
     * Створює HTML форму з необхідними атрибутами.
     *
     * @param string $action Адреса, куди буде відправлено дані форми.
     * @param string $method Метод HTTP для форми (за замовчуванням 'POST').
     * @param string|null $class CSS клас для форми (за замовчуванням 'system_form').
     * @param bool $enctype Чи потрібно додавати атрибут enctype (для відправки файлів).
     * @param string|null $target Атрибут target для відкриття результатів у новому вікні чи фреймі.
     */

    public static function create(string $action, string $method = 'POST', ?string $class = 'system_form', bool $enctype = false, string $target = null): void
    {
        # Формуємо атрибут enctype лише якщо необхідно
        $enctype_attribute = $enctype ? 'enctype="multipart/form-data"' : '';
        # Формуємо значення атрибутів для форми
        $action = $action ? clearSpecialChars($action) : '';
        $method = $method ? clearSpecialChars($method) : 'POST';
        $class = $class ? clearSpecialChars($class) : 'system_form';
        $target = $target ? clearSpecialChars($target) : '';
        # Виведення HTML коду форми
        echo "<form action=\"$action\" method=\"$method\" class=\"$class\" $enctype_attribute target=\"$target\">";
    }

    /**
     * Створює HTML мітку (label), яка може бути прив'язана до елемента форми.
     *
     * @param string $text Текст мітки.
     * @param string|null $forID ID елемента, до якого прив'язується мітка (необов'язково).
     * @param string $labelClassText CSS клас для тексту мітки (за замовчуванням 'system_label-text').
     */

    public static function label(string $text, string $forID = null, string $labelClassText = 'system_label-text'): void
    {
        # Якщо передано ID, додаємо атрибут for
        if ($forID) {
            echo '<label for="' . clearspecialchars($forID) . '" class="' . clearspecialchars($labelClassText) . '">' . clearspecialchars($text) . '</label>';
        } else {
            # Якщо ID не передано, виводимо мітку без for
            echo '<label class="' . clearspecialchars($labelClassText) . '">' . clearspecialchars($text) . '</label>';
        }
    }
    /**
     * Закриття HTML форми.
     *
     * Ця функція закриває тег <form>.
     *
     * @return void
     */

    public static function close(): void {
        echo '</form>';
    }
}
