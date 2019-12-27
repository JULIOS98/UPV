alert('Calculadora IMC');

let peso = prompt('Escribe tu peso');
let estatura = prompt('Escribe tu estatura');

let imc = peso / (estatura * estatura);


document.getElementById('peso').innerHTML = `<h1> PESO: ${peso} </h1>`;
document.getElementById('estatura').innerHTML = `<h1> ESTATURA: ${estatura} </h1>`;
document.getElementById('texto').innerHTML = `<h1> IMC: ${Math.round(imc,2)} </h1>`;


if(imc < 18.5)
{
    document.getElementById('categoria').innerHTML = `<h1> CATEGORIA: BAJO PESO </h1>`;
}

else if(imc >= 18.5 && imc <= 24.9)
{
    document.getElementById('categoria').innerHTML = `<h1> CATEGORIA: NORMAL </h1>`;
}
else if(imc >= 25 && imc < 30)
{
    document.getElementById('categoria').innerHTML = `<h1> CATEGORIA: SOBREPESO </h1>`;
}
else if( imc >= 30 )
{
    document.getElementById('categoria').innerHTML = `<h1> CATEGORIA: OBESIDAD </h1>`;
}



