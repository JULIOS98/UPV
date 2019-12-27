<?php


    if(isset($_GET['tabla']) && isset($_GET['resultados']))
    {

        $tabla = $_GET['tabla'];
        $cant_res = $_GET['resultados'];
    }
    else
    {
        $tabla = 7;
        $cant_res = 20;
    }
    
    // var_dump($_GET);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo Tablas Multiplicar</title>
</head>
<body>


    <form action="" method = 'GET'>

        <div>
            <label for=""> Tabla:</label>
            <input type="number" min="1" name="tabla">

            <label for="">Resultados:</label>
            <input type="number" min="1" value="10" name="resultados">

            <input type="submit" value="Aceptar">
        </div>


    </form>


    <table>

        <tr>
            <th>Tabla</th>
            <th>Numero</th>
            <th>Resultado</th>
        </tr>

        <?php

            for ($i=0; $i < $cant_res; $i++) 
            {
                ?>
                <!---html-->
                <tr>
                    <td><?php echo $tabla; ?> </td>
                    <td><?php echo $i+1; ?> </td>
                    <td><?php echo $tabla * ($i+1); ?> </td>
                </tr> 
            <?php
            } 
        ?>
            
    </table>
    
</body>
</html>