<?php
    session_start(); //стартуем сессию
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Музей</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
 
        <div id="header">
            <h2>Шапка сайта</h2>
 
            <a href="index.php">Главная</a>
            <?php
                if(!isset($_SESSION['login']) && !isset($_SESSION['IDUser'])){
            ?>
            <div id="auth_block">

                <div id="link_register">
                    <a href="form_register.php">Регистрация</a>
                </div>
 
                <div id="link_auth">
                    <a href="form_auth.php">Авторизация</a>
                </div>
            <?php
                } else {
            ?>
            <div>
                <p> Добро пожаловать <?php echo $_SESSION['login']; ?> </p>
                <?php 
                    if ($_SESSION['staff'] == 1) {
                ?>
                <p> Текст сотрудника </p>
                <?php
                    }
                ?>
                <?php 
                    if ($_SESSION['admin'] == 1) {
                ?>
                <p> Поздравляю, вы администратор, грац! </p>
                <?php
                    }
                ?>
            </div>
            <div id="link_auth">
                    <a href="logout.php">Выход</a>
                </div>
            <?php
                }
            ?>
            </div>
            <div class="clear"></div>
        </div>