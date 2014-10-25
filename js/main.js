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
  
// colores de los controles
$(document).ready(function() {
	 


$('.controles span.estado').each(function(){
	var textoEstado=$(this).html();
	var on='on',off='off';
	if(textoEstado==on){
	$(this).css({
	'color':'green'
	});
		 }
	if(textoEstado==off){
		 $(this).css({
	'color':'red'
	});
		  }

});	 
		 
	
	
   
});
//comportamiento botón modificar 

$(document).ready(function() {

$('#enviaract').click(function(){
$(this).removeClass( "btn btn-primary" ).addClass( "btn btn-success" );
window.location.href = "actualizar.php";

}

);
   
});

//autochequeo de botones

////////boton plugin onoff

//Regogiendo los datos de los displays
	var marcha=$("#dismar").html();
	if(marcha=='on'){
	$("#switch-marcha").prop('checked',true);}
	
	var direccion=$("#disdir").html();
	if(direccion=='derecha'){
	$("#switch-direccion").prop('checked',true);}
	
	var agua=$("#disagua").html();
	if(agua=='on'){
	$("#switch-agua").prop('checked',true);}
	
	var autostart=$("#disautostart").html();
	if(autostart=='on'){
	$("#switch-autostart").prop('checked',true);}
	
	
	var autoreverse=$("#disautoreverse").html();
	if(autoreverse=='on'){
	$("#switch-autoreverse").prop('checked',true);}

/////////////////////////////graficos
//grafico presión	
   google.setOnLoadCallback(drawChart);
   var valPresion=$('#displaypresion').html();
      function drawChart() {
	valPresion=eval(valPresion);
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Presión', valPresion]
        ]);

        var options = {
          width: 200, height:200,
		  max:6,
          redFrom: 4, redTo: 6,
          yellowFrom:0, yellowTo: 2,
		   greenFrom:2, greenTo: 4,
          minorTicks: 10
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

   
      }
	  //grafico orientación
	   google.setOnLoadCallback(drawChart2);
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['x', 'y'],
          [ 5,      7],
          [ 0,      0],
         
        ]);

        var options = {
          title: 'Orientación del Pivo',
          hAxis: {title: 'Orientación', minValue: -10, maxValue: +10},
          vAxis: {title: 'ángulo', minValue: -10, maxValue: +10},
            lineWidth:1,
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div_pivo'));

        chart.draw(data, options);
      }