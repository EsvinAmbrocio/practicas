var teclas = {
	UP:38,
	DOWN:40,
	LEFT:37,
	RIGHT:39
};


//document.addEventListener("keyup", dibujarTeclado);

var vp = document.getElementById("villaplazi");
var papel = vp.getContext("2d");

var fondo =  {
    url: "tile.png",
    cargaOK: false, 
};

var vaca =  {
    url: "vaca.png",
    cargaOK: false, 
};
var cerdo =  {
    url: "cerdo.png",
    cargaOK: false, 
};
var pollo =  {
    url: "pollo.png",
    cargaOK: false, 
};

fondo.objeto= new Image();
fondo.objeto.src = fondo.url;
fondo.objeto.addEventListener("load", cargarFondo);

vaca.objeto= new Image();
vaca.objeto.src = vaca.url;
vaca.objeto.addEventListener("load", cargarVaca);

cerdo.objeto = new Image();
cerdo.objeto.src = cerdo.url;
cerdo.objeto.addEventListener("load", cargarCerdo);

pollo.objeto = new Image();
pollo.objeto.src = "pollo.png";
pollo.objeto.addEventListener("load", cargarPollo);

var cantidad;

function dibujar (){
    if (fondo.cargaOK==true) {
        papel.drawImage(fondo.objeto,0,0);
    }
    if (vaca.cargaOK==true) {
        cantidad= aleatorio(0,10);
        for(var v=0;v<cantidad;v++){
        var x = aleatorio(0,5);
        var y = aleatorio(0,5);
        x = x * 80;
        y = y *80;
        papel.drawImage(vaca.objeto,x,y);}
    }
    if (cerdo.cargaOK==true) {
        cantidad= aleatorio(0,10);
        for(var c=0;c<cantidad;c++){
        var x = aleatorio(0,5);
        var y = aleatorio(0,5);
        x = x * 80;
        y = y *80;
        papel.drawImage(cerdo.objeto,x,y);}
    }
    /*if (pollo.cargaOK==true) {
        cantidad= aleatorio(0,10);
        for(var p=0;p<cantidad;p++){
        var x = aleatorio(0,7);
        var y = aleatorio(0,7);
        x = x * 60;
        y = y *60;
        papel.drawImage(pollo.objeto,x,y);}
    }*/
}
function cargarFondo(){
    fondo.cargaOK= true;
    dibujar();
}
function cargarVaca(){
    vaca.cargaOK= true;
    dibujar();
}
function cargarCerdo(){
    cerdo.cargaOK= true;
    dibujar();
}
function cargarPollo(){
    pollo.cargaOK= true;
    /*dibujar();*/
    papel.drawImage(pollo.objeto,250,250);
}

function aleatorio(min, max){
    var resultado;
    resultado = Math.floor (Math.random() * (max - min + 1 ) )+ min;
    return resultado;
}
var x = 150;
var y = 150;

dibujarLinea(pollo.objeto,7 , x - 1, y - 1, x + 1, y + 1, papel);

function dibujarLinea(color, grosor, xinicial, yinicial, xfinal, yfinal, lienzo){
	lienzo.beginPath();
	lienzo.strokeStyle = color;
	lienzo.lineWidth = grosor;
	lienzo.moveTo(xinicial, yinicial);
	lienzo.lineTo(xfinal, yfinal);
	lienzo.stroke();
    lienzo.closePath();}
    console.log(papel);