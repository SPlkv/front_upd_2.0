<?php
session_start();
require_once 'connect.php';//подключение к базе данных

$email=$_POST['email'];
$login =$_POST['login'];
$password=$_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if($password==$passwordRepeat)      //проверка на совпадеине пароля
{
    $password = md5($password);     //хеширование
    mysqli_query($connect, 
    "INSERT INTO `users`(`id`, `email`, `password`, `login`) VALUES (NULL,'$email','$password','$login')");//добавление в базу данных при помощи 
                                                                                                        // mysqli_query()
    header('Location: /login/signin.php');//редирект на вход
}
else{
    $_SESSION['message'] = "Пароли не совпадают";//задаем переменной 
    header('Location: /login/signup.php');//редирект на ту же
}




