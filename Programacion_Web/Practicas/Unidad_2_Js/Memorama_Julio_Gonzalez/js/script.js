function reiniciar()
{
    location.reload();
}



let contador = 0;
let ultimo;


window.addEventListener('load', main);

function main() 
{

    let score = 0;
    let vidas = 0;
    let lista = document.querySelectorAll('div[cl^="cart"]');


    for(let i=0; i<lista.length; i++)
    lista[i].addEventListener('click', function() 
    {
      if(this.className == 'cartaNeutral') 
      {
        this.className = this.getAttribute('cl');
        if(contador == 1)
          if(ultimo.className == this.className) 
          {
            score++;
            document.querySelector('#scor').innerText = score;
            
            
            if(score == 6)
            {
                alert("GANASTE!!");
                
            }
          } 
          else 
          {
            setTimeout(function() 
            {
              ultimo.className = this.className = "cartaNeutral";
              vidas++;
              document.querySelector('#vidas').innerText = vidas;

                if(vidas == 3)
                {
                    alert("PERDISTE!!!");
                    
                }

            }.bind(this), 500);
          }
        else
          ultimo = this;
          contador = 1 - contador;
      }
    }, false);

}



/*
function switcheo(x)
{
    let x = document.getElementsByClassName('cuadros');

    if(cuadro1.style.backgroundColor == "gray")
    {
       cuadro1.style.background = "red";
    }
    else if(cuadro1.style.backgroundColor == "red")
    {
        cuadro1.style.background = "gray";
    }
    
    if(cuadro2.style.backgroundColor == "gray")
    {
           cuadro2.style.background = "red";
    }
    
    else if(cuadro2.style.backgroundColor == "red")
    {
        cuadro2.style.background = "gray";
    }
    

    return false;
}


function prueba()
{
    document.body.style.backgroundColor = "blue";
}

function prueba2()
{
    let prueb = document.getElementsByClassName("cuadros");
    for (let i = 0; i < prueb.length; i++) 
    {
        prueb[i].style.backgroundColor = "gray";
        
    }
}


function cambiarColorgris(x)
{

    x.style.backgroundColor = "gray";

    if(x.style.backgroundColor== "gray")
    {
        x.style.backgroundColor = "red";
    }
    else if(x.style.backgroundColor == "red")
    {
        x.style.backgroundColor = "gray";
    }

    

}


*/