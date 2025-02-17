<?php

/**
 * Функція підрахунку довжини рядка без переносів рядка
 *
 * @param string $text Вхідний рядок
 * @return int Довжина рядка без символів нового рядка
 */

function getStringLength(string $text): int
{
    # Видаляємо всі символи переносу рядка ("\r" і "\n")
    return mb_strlen(str_replace(["\r", "\n"], '', $text), 'UTF-8');
}