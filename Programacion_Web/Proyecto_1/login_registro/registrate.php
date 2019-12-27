<?php

session_start();

if(isset($_SESSION['usuario']))
{
  header('Location: index.php');  
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  
  //echo "$usuario . $password . $password2";


$errores = '';

if(empty($usuario) or empty($password) or empty($password2))
{
  $errores .= '<li> PORFAVOR RELLENA LOS DATOS CORRECTAMENTE </li>';  
}
else
{
  
  try
  {
    $conexion = new PDO('mysql:host=localhost; dbname=rosa_sharon','root','Oswaldo96');
  }
  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
    
  }
  
  $state = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
  $state->execute(array(':usuario' => $usuario));
  $res = $state->fetch();
  
  //print_r($res);
  
  //Verifica si el usuario ya existe
  if($res != false)
  {
    $errores .= '<li> El NOMBRE DE USUARIO YA EXISTE </li>'; 
  }
  
  //Encriptar contraseña
  $password = hash('sha512', $password);
  $password2 = hash('sha512' , $password2);
  
  //echo "$usuario . $password . $password2"; 

  //Validar si no son iguales
  if($password != $password2)
  {
    $errores .= '<li> Las contraseñas no son iguales </li>';
  }
  
  
}
  
  //SI NO HAY ERRORES
  if($errores == '')
  {
   
    //$sql = "INSERT INTO user(usuario,pass,idRol) VALUES('damaris','123',2);";
    //$sql2 = "INSERT INTO usuario(usuario,pass) VALUES(:usuario, :pass)";
    $state = $conexion->prepare('INSERT INTO user (usuario,pass,idRol) VALUES (:usuario, :pass, 2)');
    $state->execute(array(':usuario' => $usuario, ':pass' => $password)); 
    //$state->execute();
    //echo "$usuario . $password";
    
    header('Location: login.php');
  }
  
}
  


require 'views/registro.view.php';

?>