window.array = new Array(3);
array[0] = "img/Evolve.jpg";
array[1] = "img/Night_Visions.jpg";
array[2] = "img/Origins.jpg";


function cambioImagen()
{

    window.contador = 0;
    console.log("antes"+contador);

    let img = document.getElementById('imagen');
 
    //img.style.backgroundImage = url(array[0]);

    window.tiempo = setInterval(function()
    {
       
       img.style.backgroundImage = "url("+array[contador]+")";

       window.contador = window.contador+1;
       console.log(contador);

       if(window.contador == 3)
       {
           window.contador = 0;
       }
      
        
    },3000);

   
}

