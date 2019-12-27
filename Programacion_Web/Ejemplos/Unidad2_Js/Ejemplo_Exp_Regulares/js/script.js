/*
    ^ Inicio
    $ Fin
    [] Un carac de la lista}
    [0-9] Un carc numerico
    [a-z,A-Z] un caract alfabetico
    [^0-9] un carcater no numerico
    
    * 0 o N veces
    bo* b bo booo boooooooo
    
    + 1 o N veces
    bo+ bo boo boooo

    ? 0 o 1 Aparacicion
    bo? Ej. b bo
    
    {} Numeros de apariciones minimas o minimas y maximas
    bo{2} -> boo
    bo{2,5} ->  boo booo boooo booooo

    opciones/repeticiones
    b{0-9}{2,4} b11, b33 , b3333

    {0-9} = /d Cualquier digito numerico

    Ej. /d{5} 00000

    ^Alumno/d$ = ALumno 0, Alumno1 , Alumno2 etc

    
    
let exp1= /^Alumno\d*$/;
let pal = prompt('Escribe una palabra');
console.log('palabra:'+ pal);
if(exp1.test(pal))
{
   console.log('palabra aceptada');

}else
{
   console.log('palabra no aceptada')
}


let exp1= /^(\w|d|_)+@(\w|\d)+\.[a-z A-Z]+$/;
let pal = prompt('Escribe una palabra');
console.log('palabra:'+ pal);
if(exp1.test(pal))
{
   console.log('palabra aceptada');

}else
{
   console.log('palabra no aceptada')
}


let exp1= /^\d{2}[1-3]\d{4}$/;
let pal = prompt('Escribe una palabra');
console.log('palabra:'+ pal);
if(exp1.test(pal))
{
   console.log('Matrícula aceptada');

}else
{
   console.log('Matrícula no aceptada')
}

let exp1= /^X+(\w{2})+-(\d{4})$/;
let pal = prompt('Escribe una palabra');
console.log('palabra:'+ pal);
if(exp1.test(pal))
{
   console.log('Placa aceptada');

}else
{
   console.log('Matrícula no aceptada')
}
*/


let exp1= /^87\d{3}[0-2]\d[1-7]\d[2-7]$/;
let pal = prompt('Escribe una palabra');
console.log('palabra:'+ pal);
if(exp1.test(pal))
{
   console.log('Código aceptado');

}else
{
   console.log('Código no aceptado')
}



*/ 