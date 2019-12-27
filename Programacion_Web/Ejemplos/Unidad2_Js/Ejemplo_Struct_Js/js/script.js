
//Math.round(num * 100) / 100;

//Objetos
let arreglo = 
{
    matricula: '1630368',
    nombre: 'Juan',
    edad: 30,
    trabaja: true,
    domicilio:
    {
        calle:'Carrera',
        numero:'226',
        colonia:'centro'
    },
    pasatiempos: ['leer','correr','peliculas']
};

//arreglo.domicilio.calle;
//arreglo.pasatiempos[0];

console.log(arreglo);

//funciones**********************

function suma(a,b)
{
    let resultado = a+b;
    return resultado;
}

//Funcion como expesion
const suma2 = function(a,b)
{
    let resultado = a+b;

    return resultado;
}

console.log('Suma = ' + suma(5,4));
console.log('Suma 2 =  ' + suma2(20,4));


//funcion Anonimas
console.log ('Suma 3 = ' +
    (function(a,b)
    {
        let resultado = a + b;
        return resultado;
    }) (45,12)
)

function mensaje()
{
    //alert('Suma = ' + suma(5,4));

    //let num = document.getElementById('numero').value;
    //alert(num);
}


