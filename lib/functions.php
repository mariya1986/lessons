<?php
function db($sql)
{
    if (!$connection = mysqli_connect("localhost","mariya",12345,"mariya"))
    {
        echo "Не удалось подключиться к БД";
    }
    else
    {
        mysqli_query($connection,"SET NAMES UTF8");
    }

    if($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;
    }

}


function login($data)
{

    $zapros = "SELECT * FROM users WHERE login='{$data['login']}'";
    echo $zapros;
    $raw_data = db($zapros);
    while ($user = mysqli_fetch_assoc($raw_data))
    {
        echo $user['name']."<br>";
    }
}

