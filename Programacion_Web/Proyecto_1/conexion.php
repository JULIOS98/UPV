<?php
  
  $host ='localhost';
  $user = 'admin';
  $password = 'Oswaldo96'
  $db = 'rosa_sharon';
  $connection = @mysqli_connect($host,$user,$password,$db);
  
  mysqli_close($connection);

  if(!$connection)
  {
    echo "Error de la conexion";
  }
 
  
?>