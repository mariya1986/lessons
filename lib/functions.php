<?php
// подключение  и работа с БД
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

// авторизация
function login($data)
{

    $zapros = "SELECT * FROM users WHERE login='{$data['login']}'";
    $raw_data = db($zapros);

    $user = mysqli_fetch_assoc($raw_data);

    if($data['login']==$user['login'] AND $data['pass']==$user['pass'])
    {
        $_SESSION['loged'] = $user['name'];
        echo "Добро пожаловать на сайт, {$user['name']}";
    }
    else
    {
        echo "Неправильный пароль!";
    }

}

// выход
function logout()
{
    unset($_SESSION['loged']);
}

