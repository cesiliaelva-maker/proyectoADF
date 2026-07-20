function factura(){
let recibo;
let recibi;
let cantidad;
let concepto;
let monto;


recibo = prompt("numero de recibo:");
    recibi = prompt("Nombre del cliente:");
    cantidad = prompt("Cantidad recibida en letras");
    concepto = prompt("Concepto del pago:");
     monto = prompt("Monto recibido en números");

document.getElementById('demo').innerHTML=recibo;
document.getElementById('demo1').innerHTML=recibi;
document.getElementById('demo2').innerHTML=cantidad;
document.getElementById('demo3').innerHTML=concepto;
document.getElementById('demo4').innerHTML=monto;












}