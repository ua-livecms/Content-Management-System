<?php

# Коригування текстових іконок Font-Awesome
function fa_icons($icons, $size = 15, $fw = null): string
{
    return "<i style='font-size: ".$size."px; vertical-align: middle' class='fa fa-".$icons." ".$fw."'></i>";
}