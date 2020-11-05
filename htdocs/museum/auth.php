<?php
    session_start();
    include "dbcon.php";

    if (isset($_POST["btn_auth"])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(!empty($_POST['login']) && !empty($_POST['password'])) {
            $query=$mysqli->query("SELECT * FROM user WHERE login = '$login'");
            $row=$query->fetch_row();
            $numrows=$query->num_rows;
            //$passver=$mysqli->query("SELECT password FROM user WHERE login = '$login'");
            if($numrows == 1 && password_verify($password, $row[2])){
                echo 'Пароль правильный';
                $_SESSION['IDUser'] = $row[0];
                $_SESSION['login'] = $login;
                header( 'Location:  index.php' );             
            }
        }
    }

?>