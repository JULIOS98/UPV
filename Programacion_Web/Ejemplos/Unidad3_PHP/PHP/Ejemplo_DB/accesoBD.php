<?php

    //mysqli ++ mysql
    //pdo
    
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

        if(isset($_GET['matricula']) && isset($_GET['nombre']) && isset($_GET['carrera']))
        {
    
            $matricula = $_GET['matricula'];
            $nombre = $_GET['nombre'];
            $carrera = $_GET['carrera'];
    
    
            $query = "INSERT INTO alumno(matricula,nombre,carrera) VALUES('$matricula','$nombre','$carrera')";
            $resultado = mysqli_query($conexion,$query);
  
            if($resultado)
            {
                echo "Se han insertado correctamente";
                
                //sleep(7);
                //header('Location: index.php');

                //echo $query_select;
            }
            else
            {
                echo "Fallo de insercion";    
            }
        
            mysqli_close($conexion);
        }
    }
?>
