<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title></title>
</head>
<body>
    <thead>
    <th>Id</th> <br>
    <th>Título</th> <br>
    <th>imagen</th> <br>
    <th>texto</th> <br>
      <br>
  
  
    <td><button > Modificar</button></td>
    <td><button > Eliminar</button></td>  
      </thead>  
  
  <?php
      include 'funciones.php';
      $conexion = conexion('rosa_sharon', 'root', 'Oswaldo96');
      $statement = ("SELECT * FROM fotos");
      $resultado = mysql_query($statement);
    while($filas = mysqli_fetch_assoc($resultado))
    {
      
      echo "<tr>";
      echo"<td>"; echo "</td>";
      echo "</tr>";
      
    }
  
  ?>
</body>
</html>