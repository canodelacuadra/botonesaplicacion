  $(document).ready(function() {
     $('.onoffswitch').click(function() {
//Añadimos la siguiente linea display;
       var message_DIV = $(this).closest('div.onoffswitch').parent().children('div').eq(1);
       var hiddenValueID = $(this).children(':hidden').val();
        if ($(this).children(':checked').length == 0){
            var valueData = 'on';
             }
        else{
            var valueData = 'off';
            }

$.ajax({
        type: "POST",
        url: "ajax.php",
        data: {value: valueData, id: hiddenValueID},
        success: function(html) {
        message_DIV.html(html);
		}
	});

	});
});
//update y set
$(document).ready(function() {
$('.btn-primary').click(function(){
$(this).removeClass( "btn btn-primary" ).addClass( "btn btn-success" );
}

);
   
});
	