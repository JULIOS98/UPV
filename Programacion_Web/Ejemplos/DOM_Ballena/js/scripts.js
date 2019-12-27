function mifuncion(){
  alert('Hola');
}


(
  
  function()
  {
  'use strict';
  
  document.addEventListener('DOMContentLoaded', function(){
    
    // var logo = document.getElementById('logo');
    // console.log(logo);

    // var navegacion = document.getElementById('navegacion');
    // console.log(navegacion.hasAttribute('class'));
    // console.log(navegacion.getAttribute('class'));

    // navegacion.setAttribute('class','otra');
    // navegacion.setAttribute('width', '300px');

    // let enlaces = document.getElementsByTagName('a');
    // console.log(enlaces);
    // for(let i = 0; i < enlaces.length; i++){
    //   enlaces[i].setAttribute('href','http://www.google.com');
    //   enlaces[i].setAttribute('target','_blank');
    // }
    
    /*let enlaces_lat = document.getElementById('sidebar').getElementsByTagName('a');
    console.log(enlaces_lat);
    
    document.querySelector('#navegacion');
    document.querySelector('.boton');*/

    /*let enlaces = document.querySelectorAll('a');
    console.log(enlaces);
    enlaces[11].setAttribute('onclick', 'mifuncion();');*/

    let nvo_enlace = document.createElement('a');
    nvo_enlace.innerText = 'Entrada 6';
    nvo_enlace.href = 'http://academia.ojasso.me';
    nvo_enlace.target = '_blank';
    nvo_enlace.style.backgroundColor = 'skyblue';

    let enlaces = document.querySelector('#sidebar');
    enlaces.appendChild(nvo_enlace);

    let titulo_texto = document.createElement('h2');
    titulo_texto.innerText = 'Hola mundo';
    titulo_texto.style.color = 'skyblue';

    let texto = document.createElement('p');
    texto.innerText = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
    
    let titulo = document.querySelector('#articulo');
    titulo.appendChild(titulo_texto);
    titulo.appendChild(texto);



    /*let nvo_texto = document.createElement('h2');
    nvo_texto.innerText = 'Hola mundo';

    let texto = document.querySelector('#botonUltimo');
    texto-appendChild(nvo_texto);*/
    
    
  });
  
})();
