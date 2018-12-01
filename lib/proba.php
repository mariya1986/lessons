<?php


function autorization ($l,$p)
{
    require_once "users.php";

    foreach ($users as $k=>$v)
    {
            if ($v['login']==$l AND $v['pass']==$p)
            {
                echo "Добро пожаловать ".$v['name'];
            }

    }

}