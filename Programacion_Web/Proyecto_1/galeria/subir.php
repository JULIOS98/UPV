<?php

require 'funciones.php';

$conexion = conexion('rosa_sharon', 'root', 'Oswaldo96');

if(!$conexion){
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
 
    $check = @getimagesize($_FILES['foto']['tmp_name']);
  if($check !== false){
       $carpeta_destino = 'fotos/';
       $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
      move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
    
      $statement = $conexion -> prepare('
      INSERT INTO fotos (titulo, imagen, texto)
      VALUES (:titulo, :imagen, :texto)
      ');
    
    $statement -> execute(array(
         ':titulo' => $_POST['titulo'],
         ':imagen' => $_FILES['foto']['name'],
         ':texto'  => $_POST['texto']
     
    ));
    
  /*  $statement = $conexion -> prepare("SELECT * FROM $tablabd");
    while($consulta = mysqli_fetch_array($statement))
    {
      echo $consulta['id'];
      echo $consulta['titulo'];
      echo $consulta['imagen'];
      echo $consulta['texto'];
      
    }
    
   
    
    
  */
     header('Location: index.php');
  }else{
    $error = "El archivo no es una imagen o el archivo es muy pesado";
  }
}

require 'views/subir.view.php';


?>