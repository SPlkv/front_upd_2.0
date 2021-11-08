<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <title>Sign up</title>
</head>
<body>
    <div>
        <div class="main-page">
            <h1 class="headline"><a href="../index.php" class="main-page__link_active">На главную</a></h1>
        </div>
        <form action = "../includes/signin.php" method="POST">
            <div class="container">
                <h1 class="headline">Вход</h1>
                <p>Заполните форму</p>
                <hr class="line">
                <label class="container__label" for="email"><b>Логин</b></label>
                <input class="container__input" type="text" name="login" required>

                <label class="container__label" for="psw"><b>Пароль</b></label>
                <input class="container__input" type="password" name="password" required>
                ​
                <input type="hidden" name="backurl" value="<?=strip_tags($_REQUEST["backurl"])?>"/>
                <hr class="line">
                <div class ="container__item">
                    <button type="submit" class="container__item__registerbtn">Войти</button>
                </div>
                <?php
                      if($_SESSION['message'])
                      {
                        echo'<span>'. $_SESSION['message'] .'</span>';
                      }
                      unset($_SESSION['message']);
                      ?>
                <div class="entry-link">
                    <p>Регистрация<a href="signup.php"> Sign up</a>.</p>
                </div>
            </div>

        </form>
    </div>
      ​
</body>
</html>