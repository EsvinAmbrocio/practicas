var text =  document.getElementById("txt_a�os");
var boto =  document.getElementById("bot");
boto.addEventListener("click",Suma);


 	
function Suma(){
 	var fecha = new Date();
	var a�o_f = parseInt(fecha.getFullYear());
	var A�o = parseInt(text.value);
	var Edad = a�o_f - A�o;
	alert("Tu edad es de " + Edad);
}

