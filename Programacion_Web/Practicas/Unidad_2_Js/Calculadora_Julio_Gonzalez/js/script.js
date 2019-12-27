/*function presiona1()
{
    const numero_1 = 1;
    console.log(numero_1);

    return numero_1;
}
function presiona2()
{
    const numero_2=2;
    console.log(numero_2);

    return numero_2;
}

function resultado()
{
    console.log(suma(presiona1(), presiona2()));


}*/



function presiona2(numero){

    let e_pantalla = document.getElementById('pantalla');

	//if (var_global == true){

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
//else{
//	alert('La calculadora esta apagada');
//}


