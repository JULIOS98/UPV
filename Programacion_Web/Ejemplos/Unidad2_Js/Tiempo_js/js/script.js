function saludo(n)
{
    alert('Hola '+ n);
}


function detener()
{
    clearInterval(window.i);
    console.log('Se Detuvo!!!');

    window.tiempo = setTimeout(function(){alert('fin')}, 5000);

}


function inicio()
{
    let nombre = prompt('Como te llamas?');
    window.i = setInterval(function(){console.log('Hola ' + nombre)}, 1000);
}


function cancelarTimeOut()
{
    clearTimeout(window.tiempo);
    console.log('Cancelado');
}