<?php
    session_start();
    session_destroy(); //уничтожение сессии
    header( 'Location:  index.php' ); 
?>