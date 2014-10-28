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
  
// colores de los controles de los displays
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

////////boton plugin onoff

//Regogiendo los datos de los displays
	var marcha=$("#dismar").html();
	console.log(marcha);
	if(marcha=='on'){
	$("#switch-marcha").prop('checked',true);}
	if(marcha=='off'){
	$("#switch-marcha").prop({'checked':false, 'value':'off'});
	}
	
	var direccion=$("#disdir").html();
	if(direccion=='derecha'){
	$("#switch-direccion").prop({
	'checked':true,
	'value':'derecha'
	});}
	
	var agua=$("#disagua").html();
	console.log(agua);
	if(agua=='on'){
	$("#switch-agua").prop('checked',true);}
	if(agua=='off'){
	$("#switch-agua").prop({'checked':false, 'value':'off'});
	}
	
	var autostart=$("#disautostart").html();
	if(autostart=='on'){
	$("#switch-autostart").prop('checked',true);
	}
	
	
	var autoreverse=$("#disautoreverse").html();
	if(autoreverse=='on'){
	$("#switch-autoreverse").prop('checked',true);}

//funcion range


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
          [ 7,   0],
          [ 0,   0],
         
        ]);

        var options = {
          title: 'Orientación del Pivot',
		  titleTextStyle:{color: 'white', fontName: 'monospace', fontSize: '12px'},
          hAxis: { minValue: -10, maxValue: +10,ticks: [-10,0,10]},
          vAxis: { minValue: -10, maxValue: +10,greedlines:4,minorGreedlines:7,ticks: [-10,0,10]},
	
		 
            lineWidth:3,
			pointSize:0,
          legend: 'none',
		  backgroundColor:{fill:'#333',stroke:'rgba(0,0,0,0)',strokeWidth:3},
		  chartArea:{backgroundColor:'rgb(0, 0, 0)'},
		  colors:['rgb(47, 204, 255)'],
		 
		  
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div_pivo'));

        chart.draw(data, options);
      }