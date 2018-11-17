<form method="post">
    Логин<input type="text" name="name">
    Пароль<input type="password" name="pass">
    <input type="submit" value="Войти">
</form>

<?php
require_once "lib/functions.php";

autorization($_POST['name'],$_POST['pass']);