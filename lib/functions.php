<?php
function login($l,$p)
{
    require_once "goodusers.php";
    if ($l==$goodlogin AND $p==$goodpass)
    {
        echo "добро пожаловать";

    }
    else
    {
        echo "неправильно";
    }
}