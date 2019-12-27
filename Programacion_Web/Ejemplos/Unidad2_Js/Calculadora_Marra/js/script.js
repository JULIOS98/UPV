
function presiona(numero){
	let e_pantalla = document.getElementById('pantalla');
	
	if(isNaN(numero)){ //si no es numero
		
		switch(numero){
			case '+':
				window.op=1;
				window.num1 = parseInt(e_pantalla.value);
				e_pantalla.value='';
				break;

			case '-':
				window.op=2;
				window.num1 = parseInt(e_pantalla.value);
				e_pantalla.value='';
				break;

			case '/':
				window.op=3;
				window.num1 = parseInt(e_pantalla.value);
				e_pantalla.value='';
				break;

			case 'x':
				window.op=4;
				window.num1 = parseInt(e_pantalla.value);
				e_pantalla.value='';
				break;

			case '=':
				switch(window.op){
					case 1:
						e_pantalla.value = parseInt(e_pantalla.value) + window.num1;
						break;

					case 2:
						e_pantalla.value = window.num1 - parseInt(e_pantalla.value);
						break;

					case 3:
						e_pantalla.value = window.num1 / parseInt(e_pantalla.value);
						break;

					case 4:
						e_pantalla.value = window.num1 * parseInt(e_pantalla.value);
						break;
				}
				break;

			case 'c':
				window.num1=0;
				window.op=0;
				e_pantalla.value='';
		}
	}
	else{
		e_pantalla.value += numero;
	}
	
}

function isPrendido(num)
{
	//let e_estado = document.getElementById('estado');

	if (num == 1)
	{
		console.log('Esta Prendido');
	}
	else if(num == 0)
	{
		console.log('Esta Apagado');
	}

	
}