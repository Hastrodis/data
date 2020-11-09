<?php
    session_start();
    include "dbcon.php";

    if (isset($_POST["btn_auth"])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(!empty($_POST['login']) && !empty($_POST['password'])) {
          /*  $sql="SELECT * FROM user WHERE login = '$login'";
            echo $sql;
            $query=$mysqli->query($sql);        */  
            //защита от инъекции
            $smtm=$mysqli->prepare('SELECT * FROM user WHERE login = ?');
            $smtm->bind_param('s',$login);
            $smtm->execute();
            $query=$smtm->get_result();

            $row=$query->fetch_row();
            $numrows=$query->num_rows;
            
            //$passver=$mysqli->query("SELECT password FROM user WHERE login = '$login'");
            if($numrows == 1 && password_verify($password, $row[2])){ //проверка соответствия хэша пароля
                $_SESSION['IDUser'] = $row[0];
                $_SESSION['login'] = $login;
                $_SESSION['staff'] = $row[5];
                $_SESSION['admin'] = $row[6];
                header( 'Location:  index.php' );             
            }
        }
    }

?>