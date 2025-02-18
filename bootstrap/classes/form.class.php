<?php

class form
{
    /**
     * Генерація HTML форми <form>.
     *
     * Ця функція дозволяє створити форму з можливістю налаштування різних параметрів, таких як метод, дія, класи, а також додаванням полів для вводу.
     * За допомогою цієї функції можна швидко створювати форми для збору даних користувача.
     *
     * @param string $action Дія форми, тобто URL, куди будуть відправлені дані.
     * @param string $method Метод передачі даних форми. Може бути 'GET' або 'POST'. За замовчуванням 'POST'.
     * @param string|null $form_class Клас для стилізації форми. За замовчуванням null (За замовчуванням 'system_form'.).
     * @param bool $enctype Визначає тип кодування, який використовується для форми. Це необхідно для відправки файлів. За замовчуванням false.
     * @param string $target Визначає, де відображатиметься відповідь на форму. Наприклад, '_self', '_blank'. За замовчуванням '_self'.
     *
     * @return void
     */

    public static function create(string $action, string $method = 'POST', ?string $form_class = 'system_form', bool $enctype = false, string $target = '_self'): void
    {
        # Додавання атрибута enctype, якщо він потрібен для відправки файлів
        $enctype_attribute = $enctype ? 'enctype="multipart/form-data"' : '';
        # Виведення HTML коду форми
        echo '<form action="' . clearSpecialChars($action) . '" method="' . clearSpecialChars($method) . '" class="' . clearSpecialChars($form_class) . '" ' . $enctype_attribute . ' target="' . clearSpecialChars($target) . '">';
    }

    /**
     * Отримання або відображення HTML мітки <label>.
     *
     * Ця функція виводить HTML елемент <label>, який зазвичай використовується для прив'язки тексту до елемента форми.
     * Якщо передано ID, то атрибут `for` буде додано до мітки, що дозволить зв'язати її з певним елементом на сторінці.
     * Якщо ID не вказано, мітка виводиться без атрибута `for`.
     *
     * @param string $text Текст мітки, який буде виведений всередині елемента <label>.
     * @param string|null $forID ID елемента, з яким буде пов'язана мітка. Якщо не вказано, атрибут `for` не додається.
     * @param string $labelClassText Клас для стилізації мітки. За замовчуванням 'system_label-text'.
     *
     * @return void
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
