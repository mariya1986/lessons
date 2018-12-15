<?php
// подключаем библиотеку функций
require_once "lib/functions.php";

// если с формы пришли любые данные
if($_POST)
{
    login($_POST);
}
//иначе подключаем форму для ввода
else
{
    require_once "form.php";
}

