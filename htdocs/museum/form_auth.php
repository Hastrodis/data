<?php
    require_once("header.php");
    if(isset($_SESSION["login"]) && isset($_SESSION["IDUser"])){
        header( 'Location:  index.php' ) ; 
    }
?>
<div id="form_register">
       <p><h2> Форма авторизации </h2></p>

        <form action="auth.php" method="post" name="form_register">
            <p>Логин: <input type="text" name="login" required="required"> </p>
            <p>Пароль: <input type="password" name="password" required="required"> </p>
            <input type="submit" name="btn_auth" value="Авторизация">
</div>
