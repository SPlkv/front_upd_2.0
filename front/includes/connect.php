<?php

    $connect = mysqli_connect('localhost', 'root', '' ,'test');//подключение к базе данных
    if(!$connect)
    {
        die('Не подключилось к базе данных');
    }