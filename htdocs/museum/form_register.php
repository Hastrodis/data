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
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
    <div id="form_register">
        <h2>Форма регистрации<h2>

        <form action="register.php" method="post" name="form_register">
            