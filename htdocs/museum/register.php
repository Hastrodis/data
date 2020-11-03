<?php
    include "dbcon.php";

    if (isset($_POST["btn_reg"])){
        
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) ) {
            $FIO = $_POST['FIO'];
            $login = $_POST['login'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //хэширование
            $emial = $_POST['email'];
            $query=$mysqli->query("SELECT * FROM user WHERE login = '$login'");
            $numrows=$query->num_rows;
            echo $numrows;
            if ($numrows == 0){
                $sql="INSERT INTO user (email, FIO, login, password) VALUES ('$emial','$FIO','$login', '$password')";
                $result=$mysqli->query($sql);

                if($result){
                    $message = "Account Successfully Created";
                    echo "ОНО ЖИВОЕ";
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