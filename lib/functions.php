<?php
function pripev($text=null,$name=null)
{
    if ($text) {
        echo $text;
    }

    if ($$name) {
        echo $name;
    }

    if ($name AND $text) {
        echo "$text $name";
    }
}

function autorization($l,$p)
{
    $good_login = "admin";
    $good_pass = 345;

    if($good_login == $l AND $good_pass == $p)
    {
        echo "Добро пожаловать на сайт";
    }
    else
    {
        echo "Неправильные логин или пароль";
    }
}