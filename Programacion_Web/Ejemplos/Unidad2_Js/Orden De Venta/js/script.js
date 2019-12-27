


function calcular(){
	let subtotal =0;
	let iva=0;
	let total=0;
	let unidades = document.querySelectorAll('input');
	let precios = document.querySelectorAll('.precio');

	for(let i=0;i<unidades.length;i++){
		subtotal += parseInt(precios[i].innerText)*parseInt(unidades[i].value);

	}
	iva= subtotal*0.16;
    total=subtotal+iva;
    
    console.log(subtotal);

	document.querySelector('#subtotal').innerHTML=`<h3>Subtotal: ${subtotal} </h3>`;
	document.querySelector('#iva').innerHTML=`<h3>Iva: ${iva} </h3>`;
	document.querySelector('#total').innerHTML=`<h3>total: ${total} </h3>`;
}


let btn= document.querySelector('button');
btn.addEventListener("click",agregar);

function agregar(){
 let precio =prompt('Tecle Precio');



 let nimg= document.createElement('img');
 nimg.setAttribute('src', 'img/1.png');

 let nlabel = document.createElement('label');
 nlabel.innerHTML=`<h3>${precio}</h>?`;
 nlabel.className="precio";
 nlabel.setAttribute('for','');

 

 let ninput=document.createElement('input');
	ninput.type="number";
	ninput.setAttribute('onchange', calcular());


	let ndiv =document.createElement('div');
	ndiv.className="producto";
	ndiv.appendChild(nimg);
	ndiv.appendChild(nlabel);
	ndiv.appendChild(ninput);
	
	document.getElementById('mostrador').appendChild(ndiv);
	
}


