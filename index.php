<?php

require_once __DIR__ . '/Functions/functions.php';

session_start();

if (isset($_SESSION['alerts'])) {
    print_r($_SESSION['alerts']);
    unset($_SESSION['alerts']);
}




?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
<h1>Зарегистрируйтесь</h1>
<form action="Controllers/registration.php" method="post">
    <input class="input" type="text" name="full_name" placeholder="Ваше имя и фамилия">
    <input class="input" type="email" name="email" placeholder="Ваш e-mail">
    <input class="input" type="password" name="password" placeholder="Пароль">
    <input class="input" type="password" name="password_сonfirm" placeholder="Повторите пароль">
    <button class="btn" type="submit">Регистрация</button>
</form>




</body>
</html>