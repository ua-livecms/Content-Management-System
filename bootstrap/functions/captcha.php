<?php

# Довжина CAPTCHA та значення для генерації випадкових чисел
$captcha_length = 6;                    // Визначаємо довжину CAPTCHA
$captcha_random_seed = "152639487";     // Значення для генерації випадкових чисел
# Перевіряємо, чи є запит на зображення CAPTCHA
if (isset($_REQUEST['image'])) {
    # Функція для генерації зображення цифри
    function write_image_number($num_c) {
        # Базова частина для кодування картинки (GIF-формат)
        $number_c = "R0lGODlhCgAMAIABAFNTU////yH5BAEAAAEALAAAAAAKAAwAAAI";
        # Визначаємо зображення для кожної цифри
        if ($num_c == "0") { $len_c = "63"; $number_c .= "WjIFgi6e+QpMP0jin1bfv2nFaBlJaAQA7";}
        if ($num_c == "1") { $len_c = "61"; $number_c .= "UjA1wG8noXlJsUnlrXhE/+DXb0RUAOw==";}
        if ($num_c == "2") { $len_c = "64"; $number_c .= "XjIFgi6e+QpMPRlbjvFtnfFnchyVJUAAAOw==";}
        if ($num_c == "3") { $len_c = "64"; $number_c .= "XjIFgi6e+Qovs0RkTzXbj+3yTJnUlVgAAOw==";}
        if ($num_c == "4") { $len_c = "64"; $number_c .= "XjA9wG8mWFIty0amczbVJDVHg9oSlZxQAOw==";}
        if ($num_c == "5") { $len_c = "63"; $number_c .= "WTIAJdsuPHovSKGoprhs67mzaJypMAQA7";}
        if ($num_c == "6") { $len_c = "63"; $number_c .= "WjIFoB6vxmFw0pfpihI3jOW1at3FRAQA7";}
        if ($num_c == "7") { $len_c = "61"; $number_c .= "UDI4Xy6vtAIzTyPpg1ndu9oEdNxUAOw==";}
        if ($num_c == "8") { $len_c = "63"; $number_c .= "WjIFgi6e+QpMP2slSpJbn7mFeWDlYAQA7";}
        if ($num_c == "9") { $len_c = "64"; $number_c .= "XjIFgi6e+QpMP0jinvbT2FGGPxmlkohUAOw==";}
        # Відправляємо заголовки для відображення зображення
        header("Content-type: image/gif");
        header("Content-length: $len_c");
        # Виводимо зображення у форматі Base64
        echo base64_decode($number_c);
    }

    # Отримуємо параметр 'image' із запиту
    if (array_key_exists('image', $_REQUEST)) {
        $num_c = $_REQUEST['image'];
        # Перевіряємо, чи передане значення відповідає хешу одного з чисел (0-9)
        for ($i = 0; $i < 10; $i++) {
            if (md5($i + $captcha_random_seed) == $num_c) {
                write_image_number($i); // Генеруємо відповідне зображення
                exit;
            }
        }
    }
    exit;
}

# Параметр для зберігання ключа CAPTCHA (можна використовувати для перевірки)
$captcha_key = '';
