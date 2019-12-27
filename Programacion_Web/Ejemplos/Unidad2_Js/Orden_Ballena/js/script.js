function productos(){
    let precios = document.querySelectorAll('.precio');
    let unidades = document.querySelectorAll('.unidad');
    let subtotal = 0, iva = 0, total = 0;

    for(let i = 0; i < unidades.length; i++){
        subtotal += parseInt(precios[i].innerText) * (unidades[i].value);
    }
    iva = subtotal * 0.16;
    total = subtotal + iva;
    document.querySelector('.subtotal').innerText = subtotal;
    document.querySelector('.iva').innerText = iva;
    document.querySelector('.total').innerText = total;
}

let add_btn = document.querySelector('.agrega');
add_btn.addEventListener("click", agregar);

function agregar(){
    let agregar_precio = document.createElement('label');
    agregar_precio.innerText = '100';
    agregar_precio.setAttribute('class', 'precio');

    let agregar_producto = document.createElement('input');
    agregar_producto.setAttribute('type', 'number');
    agregar_producto.setAttribute('class', 'unidad');
    agregar_producto.setAttribute('onchange','productos();')

    let cont_productos = document.querySelector('.contenedor_productos');
    cont_productos.appendChild(agregar_precio);
    cont_productos.appendChild(agregar_producto);
}