<?php


  if (isset($_GET["txt"])) { 
    $_GET["txt"]=1;
	// Формируем массив для JSON ответа
    $result = array(
    	'txt' => $_GET["txt"],

    ); 
    header('Content-Type: application/json');
    // Переводим массив в JSON
    echo json_encode($result); 
}
?>