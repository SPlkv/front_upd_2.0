<?php
session_start();// для глобальный переменной $_session
require_once 'connect.php';// подключение базы данных

$login = $_POST['login'];
$password = md5($_POST['password']);//хэшируем полученный пароль для 



$check_user=mysqli_query($connect , "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");//ищем пользователя
                                                                                                                //в базе
if(mysqli_num_rows($check_user)>0)// если пользователь найден то mysqli_num_rows выдаст кол во найденых
{
    $user = mysqli_fetch_assoc($check_user);//присваиваем юзеру его данные
    $_SESSION['user'] = [ 
        "id"=>$user['id'],
        "login"=>$user['login'],
        "email"=>$user['email']
    ];
    
    $backurl='/profile.php';
    if(!empty($_REQUEST['backurl']))
    {
        $backurl = $_REQUEST['backurl'];
    }
    header('Location: '.$backurl);//редирект на профиль 

    
}
else{

    $_SESSION['message'] = "Неверный email или пароль";
    header('Location: /login/signin.php');//редирект на вход
}
