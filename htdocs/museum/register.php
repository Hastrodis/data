<?php
    include "dbcon.php";

    if (isset($_POST["btn_reg"])){
        
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) ) {
            $FIO = $_POST['FIO'];
            $login = $_POST['login'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //хэширование
            $email = $_POST['email'];

            $smtm=$mysqli->prepare('SELECT * FROM user WHERE login = ?');
            $smtm->bind_param('s',$login);
            $smtm->execute();
            $query=$smtm->get_result();

            //$query=$mysqli->query("SELECT * FROM user WHERE login = '$login'");
            $numrows=$query->num_rows;
            
            if ($numrows == 0){

                $smt=$mysqli->prepare('INSERT INTO user (email, FIO, login, password) VALUES (?, ?, ?, ?)');
                $smt->bind_param('ssss',$email, $FIO, $login, $password);
                $smt->execute();
                /*$query=$smtm->get_result();
                $sql="INSERT INTO user (email, FIO, login, password) VALUES ('$emial','$FIO','$login', '$password')";*/
                $result=$smt->get_result();
                echo $numrows;
                if($result){
                    $message = "Account Successfully Created";
                    header( 'Location:  index.php' );
                } else {
                 $message = "Failed to insert data information!";
                  }
            } else {
                $message = "That username already exists! Please try another one!";
            }
        } else {
            $message = "All fields are required!"; 
        }
    }
?>