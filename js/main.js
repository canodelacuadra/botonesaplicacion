  $(document).ready(function() {
     $('.onoffswitch').click(function() {
//add this bellow line;
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
	