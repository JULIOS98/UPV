
<?php

    $entera = 5;
    $real = 5.2;
    $cadena = 'Hola Mundo';
    $booleano = false;

    echo '<label style = "color:red;"> entera: '. $entera . 'Real:' . $real. 'cadena: ' . $cadena . 
    'Booleano: ' . $booleano . '</label> <br>' ;

    /*
    Este es un comentario de 
    multiples liena
    */

  

   
    $entera = Array(20,30,40);

    //echo $entera;

    print_r($entera);

    echo '<br>' . $entera[1];

    echo '<br>';

     //////////////////////////Arreglos Asociativos/////////////////////
     $alumno = array("matricula" => '1630368' , "nombre" => 'Julio');
     var_dump($alumno);

     //Salto de Linea
     echo '<br>';

     echo $alumno['nombre'];

     echo '<br>';
     echo '<br>';

     //Ciclos en PHP

     for ($i = 0; $i < 10; $i++) 
     {
        echo $i . '<br>';
        
        if ($i % 2 == 0) 
        {
            echo $i . 'PAR'  .  ' ' .'<br>';
        }

        //echo '<br>';
    
     }

    

     //Termino del Codigo PHP
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables PHP</title>
</head>
<body>


    
</body>
</html>