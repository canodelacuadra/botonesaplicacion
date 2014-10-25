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


 function cheqDireccion(){$("#switch-direccion").attr('checked',function(){
			var direccion=$("#display-direccion").html();
			if (direccion=='derecha'){
			$("#switch-direccion").attr('checked',true)
			} 
			}
			);}
 function cheqAgua(){$("#switch-agua").attr('checked',function(){
			var agua=$("#display-agua").html();
			if (agua=='on'){
			$("#switch-agua").attr('checked',true)
			} 
			}
			);}	
 function cheqAutostart(){$("#switch-autostart").attr('checked',function(){
			var autostart=$("#display-autostart").html();
			if (autostart=='on'){
			$("#switch-autostart").attr('checked',true)
			} 
			}
			);}	
 function cheqAutoreverse(){$("#switch-autoreverse").attr('checked',function(){
			var autoreverse=$("#display-autoreverse").html();
			if (autoreverse=='on'){
			$("#switch-autoreverse").attr('checked',true)
			} 
			}
			);}	
////////boton plugin onoff
var marcha=$("#dismar").html();
if (marcha=='off'){marcha=false;} 
if (marcha=='on'){marcha=true;}
$("#switch-marcha").switchButton({
checked:marcha
});
//
var direccion=$("#disdi").html();
if (direccion=='izquierda'){marcha=false;} 
if (direccion=='derecha'){marcha=true;}
$("#switch-direccion").switchButton({
  on_label: 'DER',
  off_label: 'IZQU',
  checked:direccion,
});
//

$("#switch-agua").switchButton({
   checked:undefined,
});
//funciones para disparar cuando está en on
	function disProgramaOn(){
	$("#disprograma .estado").css({
	 'color':'rgba(47, 204, 255,1)'
		});
	$("#inprograma").show();
	
	}
	function disprogramaOff(){
	$("#disprograma .estado").css({
	 'color':'rgba(0, 0, 0,0.7)'
		});
		$("#inprograma").hide();
	}

$("#switch-autostart").switchButton({
 checked:undefined,
on_callback: disProgramaOn,
off_callback: disprogramaOff
});
$("#switch-autoreverse").switchButton({
checked:cheqAutoreverse
});
// $("#switch-seguridad").switchButton({

// });
		

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