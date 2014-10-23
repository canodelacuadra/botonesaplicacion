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
	 

console.log($('.estado').each(function(){$(this).html();}));
$('.controles span').each(function(){
	var textoEstado=$(this).html();
	var on='on',off='off',izquierda='izquierda',derecha='derecha';
	if(textoEstado==on||textoEstado==izquierda){
	$(this).css({
	"backgroundColor":"green",
	'color':'white'
	});
		 }
	if(textoEstado==off||textoEstado==derecha){
		 $(this).css({
	"backgroundColor":"red",
	'color':'white'
	});
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
//grafico presión	
   google.setOnLoadCallback(drawChart);
   var valPresion=$('#presion').html();
console.log(valPresion);
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