//reloj
function startTime(){
	today=new Date();
	h=today.getHours();
	m=today.getMinutes();
	s=today.getSeconds();
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
	t=setTimeout('startTime()',500);}
function checkTime(i)
	{if (i<10) {i="0" + i;}return i;}
	window.onload=function(){startTime();}
  
//boton onoffswithc  
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
// comportamiento estodo
$(document).ready(function() {
	 

console.log($('.estado').each(function(){$(this).html();}));
$('.estado span').each(function(){
	var textoEstado=$(this).html();
	var on='on',off='off';
	if(textoEstado==on){
	$(this).css("color","green");
		 }
	if(textoEstado==off){
		 $(this).css("color","red");
		  }

});	 
		 
	
	
   
});
//comportamiento botón modificar
$(document).ready(function() {
$('.btn-primary').click(function(){
$(this).removeClass( "btn btn-primary" ).addClass( "btn btn-success" );

}

);
   
});
	