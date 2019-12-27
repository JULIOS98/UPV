

function calcula_imc(peso, estatura){
	let imc = Math.round(peso/estatura**2 * 100) /100;
	return imc;
}

function calcular(){
	let peso =  document.getElementById('peso').value;
	let estatura =   document.getElementById('estatura').value;
	let imc =calcula_imc(peso, estatura);
	let cat ='';
	let ruta='';
	let clase='';
	let categoria =document.getElementById('cat');// busqueda de label categoria
	let imagen =document.getElementById('imagen');//busqueda de div de la imagen
	categoria.classList.remove('normal','cuidado','peligro');//para evitar que se vayan quedando acumuladas las 3 posibles clases en el escenario que un mismo usuario hiciera 3 o más calculos de imc y correspondieran con las 3 clases posibles
	document.getElementById('imc').classList.remove('normal','cuidado','peligro');
	if(peso!="" && estatura !=""){
		if(imc<18.5){
			cat='bajo peso';
			clase ='cuidado';
			ruta="url('../img/bajo\ peso.png')";//se asigna la imagen como fondo	
		}else if(imc>=18.5 && imc<25){
			cat ='normal';
			clase ='normal';
			ruta="url(../img/normal.png)";
		}else if(imc>=25 && imc <30){
			cat='sobrepeso';
			clase ='cuidado';	
			ruta="url(../img/sobrepeso.png)";		
		}else {
			cat='obesidad';
			clase='peligro';
			ruta="url(../img/obesidad.png)";		
		}

		document.getElementById('imc').innerHTML=imc;//despliega el imc calculado en la etiqueta correspondiente
		document.getElementById('imc').classList.add(clase);
		imagen.style.backgroundImage=ruta; //asigna la imagen correspondiente al div de la imagen
		categoria.classList.add(clase);//al agregarse esta clase se coloca estilo en la etiqueta que muesta la categoria correspondiente, poniendo el fondo verde, amarillo o rojo
		/* otras dos formas de realizar la asignación de la clase */
		//categoria.className+=' ' + clase ; 
		//$('#cat').addClass('cuidado');//JQUERY es una plugin de javascript para manipular el DOM
		categoria.innerHTML=cat; //coloca el texto de la categoría que corresponde segun el imc calculado		
	}else{
		alert("Debe proporcionar su peso y estatura!!");
	}
}

function limpiar(){
	document.getElementById('peso').value="";
	document.getElementById('estatura').value="";
	document.getElementById('imc').innerHTML="";
	document.getElementById('cat').innerHTML="";
	document.getElementById('imagen').style.backgroundImage='none';
}






