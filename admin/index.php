<?php
session_start();
// подключаем библиотеку функций
require_once "../lib/functions.php";

if (!$_SESSION['loged'])
{
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
}
else
{
        echo "<a href='?logout=yes'>Выйти</a>";
}


