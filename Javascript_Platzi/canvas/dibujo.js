var texto =  document.getElementById("txt_lineas");
var boton =  document.getElementById("botoncito");
boton.addEventListener("click",dibujoPorClick);

var d = document.getElementById("dibujito");
var lienzo = d.getContext("2d");
var ancho = d.width;


var e = document.getElementById("dib");
var li = e.getContext("2d");


function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal){
lienzo.beginPath();
lienzo.strokeStyle = color;
lienzo.moveTo(xinicial, yinicial);
lienzo.lineTo(xfinal, yfinal);
lienzo.stroke();
lienzo.closePath();
}

function Estrella(color, xinicial, yinicial, xfinal, yfinal){
li.beginPath();
li.strokeStyle = color;
li.moveTo(xinicial, yinicial);
li.lineTo(xfinal, yfinal);
li.stroke();
li.closePath();
}

function dibujoPorClick(){
var x = parseInt(texto.value);
var lineas = x;
var l = 0;
var h = 0;
var es = x;
var xi, yi, xf, yi1;
var xi2, yi2, xf2, yf2;
var espacio = ancho / lineas;
var mit = espacio * 0.10;
	while(l < es){
		yi2 = espacio * l;
		yf2 = 300 - (espacio * l );
		xf2 = 150 - (espacio * (l + mit));
		xi2 = 150 + (espacio * (l + mit));
		dibujarLinea("red", 150, yi2, xf2, 150);
		dibujarLinea("red", 150, yi2, xi2, 150);
		dibujarLinea("red", 150, yf2, xf2, 150);
		dibujarLinea("red", 150, yf2, xi2, 150);
	l++;}
	
	while(h < lineas){
		xf1= yi;
		yi= espacio * h;
		xf= espacio * (h + mit);
		yi1= 300 - xf;
		Estrella("#aaf", 0, yi, xf, 300);
		Estrella("#aaf", 300, yi, xf, 0);
		Estrella("#aaf", 0, yi1, xf1, 0);
		Estrella("#aaf", 300, yi1, xf1, 300);
	h++;}
}