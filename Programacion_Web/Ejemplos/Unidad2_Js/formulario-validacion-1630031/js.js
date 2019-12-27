
function DatosEdad(fecha) {
    let Nacimiento = new Date(fecha);
	let fechaActual = new Date();
	
	let año = fechaActual.getFullYear(); 
    let mes = fechaActual.getMonth();
    let dia = fechaActual.getDate();
    

    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(año);

    edad = Math.floor(	(		(fechaActual - Nacimiento) / (990 * 60 * 60 * 24) / 365)	);

    return edad;
}
function validar(){
	//valores del index
	let usuario = document.getElementById("usuario").value;
	let fecha = document.getElementById("fecha").value;
	let contra = document.getElementById("contra").value;
	let confirmo = document.getElementById("confirmo").value;
	let gen1 = document.getElementById("hombre").checked;
	let gen2 = document.getElementById("mujer").checked;
	let correo = document.getElementById("correo").value;


	


	//validacion de los valores
	let expresion1 = /^(\w|\d|_)+@(\w|\d)+\.[a-zA-Z]+$/;
	let expresion2 = /^(\w|\d){5,15}$/;
	let expresion3 = /^(\w+\d+|_|%|\$|#){8,15}$/;
	let expresion4 = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{4}$/;
	//inicio validacion
//if1
	if(expresion2.test(usuario)){
//if2
		if(expresion1.test(correo)){
//if3
			if (expresion3.test(contra) && expresion3.test(confirmo)) {
//if4
				if (contra == confirmo) {
//if5
					if(expresion4.test(fecha)){
						let edad = DatosEdad(fecha);
//if6
						if(edad>=1 && edad<121){
							document.getElementById("Edad").value = edad;
//if7
							if (document.getElementById("state").selectedIndex ==  "" || document.getElementById("city").selectedIndex == "" ) {
								alert('Selecciona algo');
							}
//else7
else{
//if8
								if (gen1==true || gen2==true) {

									alert('Datos confirmados');
								}
//else8
 									else{
									alert('Error de datos');
								}
							}							
						} 
//else6
else{
							alert('Edad erronea');
						}
					} 
//else5
else{
						alert('Fecha nacimeinto No Permitida');
					}		
				} 
//else4
else{
					alert('Error contraseña erronea');
				}
			} 
//else3
else{
				alert('Contraseña no Permitida');
			}			
		} 
//else2
else{
			alert('Correo no aceptado');
		}
	} 
//else1
else{
		alert('Usuario no permitido');
	}//fin if

}//fin funcion

