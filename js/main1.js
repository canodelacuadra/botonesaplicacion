var estadoBoton=0;
function onoff(element)
{
  estadoBoton= 1 - estadoBoton;
  var contenidoBoton, colorFondo, colorTexto;
  if(estadoBoton)
  {
    contenidoBoton="ON";
    colorFondo="green";
    colorTexto="lightgreen";
	
  }
  else
  {
    contenidoBoton="OFF";
    colorFondo="lightgray";
    colorTexto="gray";
  }
  var child=element.firstChild;
  child.style.background=colorFondo;
  child.style.color=colorTexto;
  child.innerHTML=contenidoBoton;
  if (estadoBoton==0){
  element.attributes.name.value='off';
  }
  if (estadoBoton==1){
  element.attributes.name.value='on';
  }
}

