var d = document.getElementById("dibujito");
var lienxo = d.getContext("2d");
var lineas = 30;
var l = 0;
var yi, xf;

for(i=0; 1 < lineas; l++){
	yi = 10 + l;
	xf = 10 (l + 1);
	dibujarLinea("red", 0, yi, xf, 300);
	dibujarLinea("red", 300, yi, xf, 0);
	console.log("linea" + 1);}
dibujarLinea("red",1,1,1,299);
dibujarLinea("red",1,299,299,299);

function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal){
lienzo.beginPath();
lienzo.strokeStyle = color;
lienzo.moveTo(xinicial, yinicial);
lienzo.lineTo(xfinal, yfinal);
lienzo.stroke();
lienzo.closePath();
}