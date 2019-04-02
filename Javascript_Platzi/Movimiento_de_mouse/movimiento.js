document.addEventListener("mousedown", trazarMouse);

var cuadrito = document.getElementById("pizarra");
var papel = cuadrito.getContext("2d");

function dibujarLinea(color, grosor, xinicial, yinicial, xfinal, yfinal, lienzo){
	lienzo.beginPath();
	lienzo.strokeStyle = color;
	lienzo.lineWidth = grosor;
	lienzo.moveTo(xinicial, yinicial);
	lienzo.lineTo(xfinal, yfinal);
	lienzo.stroke();
	lienzo.closePath();
}

var xi;
var yi;
var xf;
var yf;

function trazarMouse(evento){
    var pan = evento.toElement;
    var i = pan.id;
    var boton = evento.button;
    if(i == "pizarra"){
        switch(boton){
            case 0:
                xi=evento.layerX;
                yi= evento.layerY;
                dibujarLinea("white",3,xi,yi,xf,yf,papel);
                xf=xi;
                yf=yi;
            break;
       }   } 
}
