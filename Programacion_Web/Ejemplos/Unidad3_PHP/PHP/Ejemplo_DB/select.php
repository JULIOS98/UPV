<?php

      
$bd = 'upv';
$usuario = 'root';
$contraseña = '';
$serv = 'localhost'; //127.0.0.1



$conexion = mysqli_connect($serv,$usuario,$contraseña,$bd);

if(!$conexion)
{
    echo "No se puede conectar con el servidor";
    exit;
}
else
{

    echo "Conexion Exitosa";
    echo "<br>";

    $query_select = "SELECT * FROM alumno";
    $resultado_select = mysqli_query($conexion,$query_select);

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Tabla</title>
</head>
<body>

    <div class="contenedor_universal">
    
        <div id="contenedor_select">

            <table>

                <tbody>
                
                    <?php while($row = mysqli_fetch_array($resultado_select))
                    { 
                    ?>
                        <tr>
                            <td>  <?php echo $row['matricula']; ?> </td>
                            <td>  <?php echo $row['nombre']; ?> </td>
                            <td>  <?php echo $row['carrera']; ?> </td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
        </div> <!--Termino de contenedor select--->

        <div id="boton_regresar">
            <button> 
               <a href="index.php">  Regresar  </a>  
            </button>
        </div>
    </div> <!--Termino de contenedor universal-->
</body>
</html>