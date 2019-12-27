 //Prompt es una entrada de datos
//LET O VAR
       
//var nombre = prompt("Como te llamas?");
//document.getElementById('texto').innerHTML = '<h1> HOLA' + nombre + '</h1>';
//document.getElementById('texto').innerHTML = `<h1> HOLA ${nombre} </h1>`;

alert('Bienvenido');

/*Variables*/
var nombre = 'Juan';
let apellido = 'Mtz';

const edad = 30;
const PI = 3.141516

//console.log('Nombre Completo: ' + nombre + ' ' + apellido);

console.log(`Nombre Completo: ${nombre} ${apellido}`);
console.log(edad);
console.log(parseInt(edad) + 30);

let saludo = nombre.concat(', Buenos dias');
console.log(saludo);

//Mayusculas
saludo = saludo.toUpperCase();
console.log(saludo);

//Minusculas
saludo = saludo.toLowerCase();
console.log(saludo);

saludo = saludo.split(',');
console.log(saludo);

//ejemplos de funciones Numericas

let estatura = 1.75

//Redondea hacia arriba
console.log('Ceil ' + Math.ceil(estatura) + ' ' +'Metros');

//Redonde hacia abajo
console.log('floor ' + Math.floor(estatura) + ' ' +'Metros');

console.log('round ' + Math.round(estatura) + ' ' +'Metros');


console.log('Potencia 2^3 = ' + Math.pow(2,3));
console.log('Raiz 9: ' + Math.sqrt(9));
console.log('Abs -14: ' + Math.abs(-14));


//Arreglos
let array = [1,2,3,4];

array[4] = 5;

array.push(79); // Coloca al final
array.unshift(13); 

console.log(array);

array.pop();
array.shift();

console.log(array); // Quita el ultimo elmento del final


var x = 10;

if(x == 10)
{
    console.log('Verdadero es 10');
}
else if(x%2 == 0)
{
    console.log('Es un numero par');

}
else if(x % 2 != 0)
{
    console.log('Es un numero impar');
}

switch(x)
{
    case 10:
        console.log('Es 10');
        break;
    case 8:
        console.log('Es 8');
        break;
    default:
        console.log('Equis de');
        break;
}

//Cicloss en js

let elemento = document.getElementById('texto');
let cadena = '';

for (let index = 1; index < 10; index++) 
{
    cadena += `<p>${index} X 7 = ${index*7} </p>`;
    console.log(`${index} x 7=  ${index * 7} ` );
}   

elemento.innerHTML = cadena;






