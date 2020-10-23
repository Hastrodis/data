$( document ).ready(function() {
    $("#btn").click(
		function(){
            $('#result_form').html('');
            sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
            console.log(response);
        	result = $.parseJSON(response);
            //$('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.countr);
            //console.log(response)
           /* if (result.name == 0) {$('input[name="name"]').css({'background':'red'}); $('#result_form').html('error');};
            if (result.sname == 0) {$('input[name="sname"]').css({'background':'red'}); $('#result_form').html('error');};*/
            $.each(result, function( index, value ) {
                if (value.error != '') {
                    $('input[name="'+value.name+'"]').addClass('error'); 
                    $('#result_form').append(value.name+': '+value.error);
                }
                else {
                    $('input[name="'+value.name+'"]').removeClass('error'); 
                }
                console.log(value.name);
              });
            //$('#result_form').html('succes');
    	},
    	error: function(response) { 
            $('#result_form').html('Ошибка');
    	}
 	});
}