function factorial(x)
{	
    if(x == 0)
    {
        
      return 1;
    }

    return x * factorial( x - 1);

    
}

function mensaje()
{
    let n = document.getElementById('numero').value;
    alert('Numero Ingresado: '+ n);

    let res = factorial(n);

    alert('Resultado: ' + res);

    let resultado = document.getElementById('resultado');
    
    console.log('Factorial = ' + factorial(n));

    resultado.innerHTML = res;
}




