<?php

$fields = array('name', 'sname', 'oname', 'year', 'emaill', 'countr');
$result = array(); 
$i=0;
foreach($fields as $field) {
    $result[$i] = array();
    $result[$i]['error'] = '';
    $result[$i]['name'] = $field;
   // echo '++++'.$_REQUEST[$field];
    if ($field != 'oname'){
        if ($_REQUEST[$field] == '')  {  
            $result[$i]['error'] = 'Поле не должно быть пустым </br>'; 
        }
    }
    
    if ($field == 'countr') {
        if ($_REQUEST[$field] == '')  {  
            $result[$i]['error'] = 'Поле не должно быть пустым </br>'; 
            
        } else {
            if ($_REQUEST['countr'] == "США"){
                $result[2]['error'] = '';
            }
            else {
                $result[2]['error'] = 'Поле не должно быть пустым </br>';
            }
            
        }
        
    }
    

    $i++;
}

    header('Content-Type: application/json');
    echo json_encode($result); 


?>