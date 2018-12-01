<?php


function autorization ($l,$p)
{
    good_login=admin;
    good_pass=345;

    if ($good_login==$l AND $good_pass==$p)
    {
        echo "Добро пожаловать";
    }
    else
    {
        echo "не правельные логин или пароль";
    }
}