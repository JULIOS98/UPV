
function modifica_texto()
{
    alert("Estas ejecutando la funcion 1 al cambiar el texto de la caja");
}

function presiona(e)
{

    let letra = String.fromCharCode(e.keyCode);
    switch(letra)
    {
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            break;
        default:
            e.preventDefault();
    }

    let codigo = e.keyCode;
    console.log('Estas presionando la tecla ' + String.fromCharCode(codigo));
}

function suelta()
{
    console.log("Has soltado la tecla");
}

function mantiene()
{
    console.log("Esta manteniendo la tecla");
}

function doble()
{
    console.log("Has hecho doble click!!!");
}