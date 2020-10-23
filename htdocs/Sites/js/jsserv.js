
 $(document).ready(function(){ 
     $('#mainForm').on('submit', FAJAX);
    });
   
function FAJAX(e){
    e.preventDefault();   
    var data = $('#mainForm').serialize();
    console.log('строка');
    console.log(data);
    $.ajax({
        url : "php/back.php",
        type : "GET",
        dataType: "json",
        data : data,
        success: function(data) { //Данные отправлены успешно
            console.log(data);
            console.log('строка');
        	result = $.parseJSON(data);
            $('#viv').html(data.txt);
            
    	}
    });   
    return false;
     
}