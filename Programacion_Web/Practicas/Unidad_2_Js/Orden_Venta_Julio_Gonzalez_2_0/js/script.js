
const IVA = 16; 

function calcular()
{
    let subtotal = 0;
    let iva = 0;
    let total = 0;

    
    let iteradores = document.querySelectorAll('.iteradores');
    let precios = document.querySelectorAll('.precios');
  

    for (let i = 0; i < iteradores.length; i++) {
        
        //alert(iteradores[i].value);
        subtotal += (parseInt(precios[i].innerText)) * iteradores[i].value;
        //alert(subtotal);
    } 
    
    
     iva = (subtotal*IVA)/100;
     total = (subtotal+iva);


    document.querySelector('#subtotal').innerText  = subtotal;
    document.querySelector('#iva').innerText  = iva;
    document.querySelector('#total').innerText  = total;
}

boton = document.querySelector('.btnAgregar');
boton.addEventListener("click", agregar);


function agregar()
{
    let iterador = document.querySelectorAll('.productos');

    let i = 1;

    for ( i = 0; i <= iterador.length; i++) {

        
    }

    let nuevo_lbl = document.createElement('label');
    nuevo_lbl.setAttribute('class','productos');
    nuevo_lbl.innerText = 'Producto' + ' ' +i;

    let nuevo_precio = document.createElement('label');
    nuevo_precio.innerText = '200';
    nuevo_precio.setAttribute('class','precios');

    let nuevo_input = document.createElement('input');
    nuevo_input.setAttribute('type', 'number');
    nuevo_input.setAttribute('class','iteradores');
    nuevo_input.setAttribute('onchange','calcular();');
    nuevo_input.setAttribute('min','0');
    nuevo_input.setAttribute('max','5');

    let padre_div = document.querySelector('.cajota_productos');
    padre_div.appendChild(nuevo_lbl);
    padre_div.appendChild(nuevo_precio);
    padre_div.appendChild(nuevo_input);
    
}

/*
function calcular()
{
    let precio1 = document.getElementById('precio1').innerText;
    precio1 = parseInt(precio1);

    let iterador1 = document.getElementById('iterador1').value;
    let sub1 = precio1 * iterador1;
    //alert('Precio1 = ' + precio1);
    //alert('Iterador1 = ' + iterador1);
    //alert('Subtotal1 = ' + sub1);

    let precio2 = document.getElementById('precio2').innerText;
    precio2 = parseInt(precio2);
    let iterador2 = document.getElementById('iterador2').value;
    let sub2 = precio2 * iterador2;
    //alert('Precio2 = ' + precio2);
    //alert('Iterador2 = ' + iterador2);
    //alert('Subtotal2 = ' + sub2);

    let precio3 = document.getElementById('precio3').innerText;
    precio3 = parseInt(precio3);
    let iterador3 = document.getElementById('iterador3').value;
    let sub3 = precio3 * iterador3;
    //alert('Precio3 = ' + precio3);
    //alert('Iterador3 = ' + iterador3);
    //alert('Subtotal3 = ' + sub3);
   
    let subtotal = sub1 + sub2 +sub3;
    let iva = (subtotal*IVA)/100;
    let total = (subtotal+iva);

    let sub = document.getElementById('subtotal');
    sub.innerHTML = subtotal;

    let tasa = document.getElementById('iva');
    tasa.innerHTML = iva;

    let tot = document.getElementById('total');
    tot.innerHTML = total;
}*/





