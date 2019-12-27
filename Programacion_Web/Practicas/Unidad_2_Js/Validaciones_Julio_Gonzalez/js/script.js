function validarNombre() 
{

    let nombre_usuario = /^(\w|\d){5,15}$/;
    let validar = document.querySelector('#nombre').value;
    let col = document.getElementById('user');

    
        
    if(nombre_usuario.test(validar))
    {
        console.log('Validado');
        col.style.backgroundColor = "green";
      

    }else{
        console.log('No Validado');
        col.style.backgroundColor = "red";
    }

}

function validarContraseña()
{
    let contraseña_validar = /^(\w+\d+|_|%|\$|#){2,15}$/;
    let contraseña_1 = document.querySelector('#contraseña').value;
    let contraseña_2 = document.querySelector('#confirmar').value;
    let col = document.getElementById('pass');
    let col2 = document.getElementById('con_pass');
    


    console.log(contraseña_1);
    if(contraseña_validar.test(contraseña_1) && contraseña_validar.test(contraseña_2))
    {

        if(contraseña_1 == contraseña_2)
        {
            console.log(' Contraseñas Iguales');
            col.style.backgroundColor = "green";
            col2.style.backgroundColor = "green";
    
        }
        else{
            console.log("NO IGUALES");
            col.style.backgroundColor = "red";
            col2.style.backgroundColor = "red";
        }


       
    }
    else{
        console.log(' Contraseña No Validada');
        col.style.backgroundColor = "red";
        col2.style.backgroundColor = "red";
    }

}





function validarCorreo()
{
 
    let correo_validar = /^(\w|\d|_){2,4}@(\w|\d)+\.[a-zA-Z]+$/;
    let correo_v = document.querySelector('#correo').value;
    let col = document.getElementById('corr');

    console.log(correo_v);
    if(correo_validar.test(correo_v))
    {
        console.log(' Correo Validado');
        col.style.backgroundColor = "green";
    }
    else{
        console.log(' Correo No Validado');
        col.style.backgroundColor = "red";
    }

}

function validarSexo()
{
    let h = document.querySelector('#hombre').checked;
    let m = document.querySelector('#mujer').checked;
    let col = document.getElementById('sexo');

		if(h == true || m == true){

            console.log("Sexo Correcto");
            col.style.backgroundColor = "green";
        }
        else{

            console.log("Debe escoger uno");
            col.style.backgroundColor = "red";
        }
}


function validarGlobal()
{
  
    
    validarNombre();
    validarContraseña();
    validarCorreo();
    validarSexo();

}

