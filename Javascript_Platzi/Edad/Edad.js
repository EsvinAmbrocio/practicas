var text =  document.getElementById("txt_años");
var boto =  document.getElementById("bot");
boto.addEventListener("click",Suma);


 	
function Suma(){
 	var fecha = new Date();
	var año_f = parseInt(fecha.getFullYear());
	var Año = parseInt(text.value);
	var Edad = año_f - Año;
	alert("Tu edad es de " + Edad);
}

