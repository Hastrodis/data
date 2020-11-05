<?php
    require_once("header.php");
?>
    <div class="block_for_messages">
        <?php
            if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
                echo $_SESSION["error_messages"];

                unset($_SESSION["error_messages"]); 
            }
            if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
                echo $_SESSION["success_messages"];
                 
                unset($_SESSION["success_messages"]);
            }   
        ?>
    </div>
<?php
    //форма регистрации тут
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
?>
    <div id="form_register">
       <p><h2> Форма регистрации</h2></p>

        <form action="register.php" method="post" name="form_register">
            <p>Ф.И.О.: <input type="text" name="FIO"> </p>
            <p>Логин: <input type="text" name="login" required="required"> </p>
            <p>Пароль: <input type="password" name="password" required="required"> </p>
            <p>Email: <input type="email" name="email" required="required"> </p>
            <input type="submit" name="btn_reg" value="Зарегистрироваться">
    </div>
<?php
    }
?>
