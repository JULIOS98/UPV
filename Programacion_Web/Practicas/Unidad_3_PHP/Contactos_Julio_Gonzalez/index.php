<?php

if(isset($_GET['cantidad']))
{

    $cant_contactos = $_GET['cantidad'];
}
else
{
    $cant_contactos = 2;
}

    

    echo "Cantidad: " . $cant_contactos ;
    
    
    //var_dump($_GET);

    if(isset($_GET["nombre"]) && isset($_GET["telefono"]))
    {
        echo "Hola";
        $nombre  = $_GET["nombre"];
        $telefono = $_GET["telefono"];

    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <div id="contenedor_universal">
        
    <form action="" method = 'GET'>
        <label for=""> Contacto:</label>
        <input type="number" min="1" name="cantidad">
        <input type="submit" value="Aceptar">
    </form>
     
    <br>
    
    <?php // Principio PHP 1   
    for ($i = 1; $i <= $cant_contactos ; $i++) 
    { 
    ?> <!--Termino PHP 1--> 

    <div id="nombre_tel">
    
    <form action="" method = 'GET'>
    
        <label for="">Nombre: <?php  echo $i  ?> </label>
        <input type="text" name="nombre<?php  echo $i  ?>">

        <label for="">Telefono: <?php echo $i ?> </label>
        <input type="text" name="telefono<?php  echo $i  ?>">   

    <?php // Principio PHP 2
    }
    ?> <!--Termino PHP 2--->
    
        <input type="Submit" value="Guardar" name="Guardar">  
    </form>

    </div> <!--Se Termina Div de Inputs nombre_tel-->
      
    
    <?php //Principio PHP 3
    
    for ($j=1; $j <= $cant_contactos; $j++) 
    {
    ?>  <!----Termino PHP 3 --->
        <div>
            
            <?php echo "Contacto {$j}: " . $_GET["nombre{$j}"] . " " .  $_GET["telefono{$j}"]; ?>
            
        </div>
    <?php //Principio PHP 4 
    }
    ?>  <!---Termino PHP 4--> 

    </div>  <!----Termino de Contenedor Universal---->
    
</body>
</html>