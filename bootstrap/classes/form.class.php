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
     * Створює кнопку (button) з можливістю додавання іконки, тексту та додаткових параметрів.
     *
     * @param string|null $cssClass Клас CSS для кнопки (необов'язково).
     * @param string|null $buttonName Ім'я кнопки, яке буде використовуватись для відправки форми.
     * @param string|null $iconClass Іконка для кнопки, яка буде відображена перед текстом (необов'язково).
     * @param string|null $buttonText Текст кнопки, який буде перекладений через функцію translation().
     * @param string|null $extraAttributes Додатковий атрибут для кнопки (необов'язково).
     * @param int $iconSize Розмір іконки в пікселях (за замовчуванням 15px).
     */

    static function button(string $cssClass = null, string $buttonName = null, string $iconClass = null, string $buttonText = null, string $extraAttributes = null, int $iconSize = 15): void {
        # Перевірка наявності іконки, якщо вона задана, створюється HTML для іконки
        $iconHtml = $iconClass === null ? null : "<i class='fa fa-" . $iconClass . " fa-fw' style='font-size: " . $iconSize . "px'></i>";
        ?>
        <!-- Створює кнопку з вказаними атрибутами та додатковим текстом -->
        <button o="<?=$extraAttributes?>" type="submit" class="<?=$cssClass?>" name="<?=$buttonName?>" id="<?=$buttonName?>" value="go"><?=$iconHtml?> <?=translation($buttonText)?></button>
        <!-- Додає прихований input для передачі значення "go" разом з іншими параметрами -->
        <input type="hidden" value="go" name="<?=$buttonName?>">
        <?
        # Якщо захист CSRF увімкнено, додається прихований input з токеном
        /*
        if (config('CSRF') == 1){
            ?>
            <!-- Прихований input для токену CSRF, забезпечує захист від атак -->
            <input type="hidden" name="<?=csrf::token_id()?>" value="<?=csrf::token(csrf::token_id())?>">
            <?
        }
        */
    }

     *
     * @return void
     */

    public static function close(): void {
        echo '</form>';
    }
}
